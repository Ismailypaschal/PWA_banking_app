<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Transfer;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class TransferSendController extends Controller
{
    public function updateTransfer($id)
    {
        $user = User::with('accounts')->findOrFail($id);
        // get the user's account
        $account = $user->accounts()->first();
        $transfers = Transfer::where('account_id', $user->accounts->id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.update-transfer', compact('user', 'transfers'));
    }
    public function updateTransferStore(Request $request, $id)
    {
        $user = User::with('accounts')->findOrFail($id);
        // get the user's account
        $account = $user->accounts()->first();
        $balanceBefore = $account->balance;

        $requestData = request()->validate([
            'status' => ['required', 'string'],
            'transfer_id' => ['required', 'integer'],
            'amount' => ['required', 'numeric']
        ]);
        try {

            // find the specific transfer
            $transfer = Transfer::findOrFail($requestData['transfer_id']);

            // Prevent double update
            if ($transfer->status !== 'pending') {
                throw new Exception(' because transfer already processed.');
            }

            // find the specific transaction
            $transaction = Transaction::findOrFail($requestData['transfer_id']);


            // update transfer status
            $transfer->update([
                'status' => $requestData['status']
            ]);

            // if transfer failed, refund the amount
            if ($requestData['status'] === 'failed') {

                $balanceBefore = $account->balance;
                $balanceAfter = $balanceBefore + $requestData['amount'];

                $account->update([
                    'balance' => $balanceAfter
                ]);

                // update transaction status
                $transaction->where('reference', $transfer->reference)->update([
                    'status' => $requestData['status']
                ]);

                // update transfer status
                $transfer->update([
                    'status' => $requestData['status']
                ]);

                // Record transaction log
                Transaction::create([
                    'account_id' => $account->id,
                    'reference' => 'REF-' . uniqid(),
                    'type' => 'credit',
                    'amount' => $transfer->amount,
                    'balance_before' => $balanceBefore,
                    'balance_after' => $balanceAfter,
                    'status' => 'successful',
                    'category' => 'transfer_refund',
                    'description' => 'Transfer failed refund',
                    'source_account' => $transfer->destination_account,
                    'destination_account' => $account->account_number
                ]);
            }
            return redirect()->route('admin.user.transfers.store', $id)->with('success', 'Transfer status update successfully');
        } catch (Exception $e) {
            return back()->with('error', 'There was an error updating a transfer' . $e->getMessage());
        }
    }
}
