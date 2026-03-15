<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit($id)
    {
        $user = User::with('accounts')->findOrFail($id);
        return view('admin.fund-account', compact('user'));
    }
    public function storeDeposit(Request $request, $id)
    {
        $requestData = request()->validate([
            'amount' => ['required', 'numeric'],
            'sender_name' => ['required', 'string'],
            'bank_name' => ['required', 'string'],
            'deposit_type' => ['required', 'string'],
            'deposit_address' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        $user = User::with('accounts')->findOrFail($id);

        // Make sure the user actually has an account record
        $account = Account::where('user_id', $id)->first();

        try {
            if (! $account) {
                throw new Exception('User does not have an associated account.');
            }

            $accountId = $account->id;

            $reference = 'DEP-' . substr(rand(0, time()), 0, 7);

            $data = [
                'amount' => $requestData['amount'],
                'account_id' => $accountId,
                'sender_name' => $requestData['sender_name'],
                'bank_name' => $requestData['bank_name'],
                'deposit_type' => $requestData['deposit_type'],
                'deposit_address' => $requestData['deposit_address'],
                'description' => $requestData['description'],
                'reference' => $reference
            ];

            $deposit = Deposit::create($data);

            // Update account balance
            $balanceBefore = $account->balance;
            $balanceAfter = $balanceBefore + $requestData['amount'];

            $account->update([
                'balance' => $balanceAfter
            ]);

            // Insert Transaction
            $transaction = Transaction::create([
                'account_id' => $accountId,
                'reference' => $reference,
                'type' => 'credit',
                'amount' => $requestData['amount'],
                'balance_before' => $balanceBefore,
                'balance_after' => $balanceAfter,
                'status' => 'successful',
                'category' => 'deposit',
                'description' => $requestData['description'],
                'source_account' => $account->account_number,
                'destination_account' => $requestData['deposit_address']
            ]);

            return redirect()->route('admin.user.deposits', $id)->with('success', 'User account was deposited successfully.');
        } catch (Exception $e) {
            // Log the error so we can debug server-side
            logger()->error('storeDeposit error', ['exception' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);

            // Return back with a flash error message and keep old input
            return back()->with('error', 'An error occurred while creating the deposit. Please try again. ' . $e->getMessage())->withInput();
        }
    }
    public function updateDeposit($id)
    {
        $user = User::with('accounts')->findOrFail($id);
        // get the user's account
        $account = $user->accounts()->first();
        $deposits = Deposit::where('account_id', $user->accounts->id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.update-deposit', compact('user', 'deposits'));
    }
}
