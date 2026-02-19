<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transfer;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Support\Facades\Hash;

class TransferController extends Controller
{
    public function storeTransfer()
    {
        $user = Auth::user();
        $requestData = [];


        $requestData = request()->validate([
            'bank_name' => ['required', 'string'],
            'bene_account_name' => ['required', 'string'],
            'bene_account_number' => ['required', 'string'],
            'transfer_type' => ['required', 'string'],
            'amount' => ['required', 'numeric'],
            'account_type' => ['required', 'string'],
            'description' => ['required', 'string'],
            'security_pin' => ['required', 'min:4', 'max: 4'],

            // Conditional for international
            'swift_code' => ['required_if:transfer_type,wire', 'nullable', 'string', 'min:8', 'max:11'],
            'routing_number' => ['required_if:transfer_type,wire', 'nullable', 'string', 'digits:9'],
            'country' => ['required_if:transfer_type,wire', 'nullable', 'string'], // e.g. ISO code
            'text_description'    => ['nullable', 'string'],  // if this is memo/note
        ]);

        // Verify PIN FIRST
        if (! Hash::check($requestData['security_pin'], $user->security_pin)) {
            return back()
                ->withInput()
                ->withErrors(['security_pin' => 'The provided PIN is incorrect.'])
                ->with('error', 'Invalid security PIN.');
        }

        // PIN correct → mark session (for middleware protection on dashboard/etc.)
        session(['pin_verified' => true]);


        $reference = 'TF_' . substr(rand(0, time()), 0, 7);

        $account = $user->accounts()->firstOrFail(); // throws if missing

        // /** 💰 CHECK BALANCE */
        // if ((float) $account->balance < (float) $requestData['amount']) {
        //     return back()->with('error', 'Insufficient balance.');
        // }

        $account_id = $account->id;
        try {
            $data = [
                'account_id' => $account_id,
                'amount' => $requestData['amount'],
                'reference' => $reference,
                'bank_name' => $requestData['bank_name'],
                'bene_account_name' => $requestData['bene_account_name'],
                'bene_account_number' => $requestData['bene_account_number'],
                'account_type' => $requestData['account_type'],
                'transfer_type' => $requestData['transfer_type'],
                'description' => $requestData['description']
            ];
            if ($requestData['transfer_type'] === 'wire') {
                $data = array_merge($data, [
                    'country'        => $requestData['country'],
                    'swift_code'     => $requestData['swift_code'],
                    'routing_number' => $requestData['routing_number'],
                ]);
            }
            Transfer::create($data);

            $account->update([
                'balance' => $account->balance - $requestData['amount']
            ]);

            // Insert Transaction
            $transaction = Transaction::create([
                'account_id' => $account_id,
                'reference' => $reference,
                'type' => 'debit',
                'amount' => $requestData['amount'],
                'balance_before' => $account->balance + $requestData['amount'],
                'balance_after' => $account->balance - $requestData['amount'],
                'category' => 'transfer',
                'description' => $requestData['description'],
                'source_account' => $account->account_number,
                'destination_account' => $requestData['bene_account_number']
            ]);

            return redirect()->route('user.dashboard')->with('success', 'Your Transfer to account no: ' . $requestData['bene_account_number'] . ' was successful!');
        } catch (Exception $e) {
            $bene = $requestData['bene_account_number'] ?? 'this beneficiary account';

            return back()->with('error', "There was an error transferring to: {$bene}" . $e->getMessage());
        }
    }
}
