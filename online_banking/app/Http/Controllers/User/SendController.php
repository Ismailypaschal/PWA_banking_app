<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Transfer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class SendController extends Controller
{
    public function storeSend()
    {
        $user = Auth::user();
        $requestData = [];

        $requestData = request()->validate([
            'bene_account_number' => ['required', 'string', 'max:255'],
            'send_type' => ['required', 'string', 'in:zelle,paypal,crypto,cashapp'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'description' => ['required', 'string', 'max:255'],


            // crypto network is required only if send_type is crypto
            'crypto_network' => ['required_if:send_type,crypto'],

            // security PIN (4 digits) used later for Hash::check()
            'security_pin' => ['required', 'digits:4'],
        ]);

        // Verify PIN FIRST
        if (! Hash::check($requestData['security_pin'], $user->security_pin)) {
            return back()
                ->withInput()
                ->withErrors(['security_pin' => 'The Security is incorrect.'])
                ->with('error', 'Invalid security PIN');
        }

        // Pin correct → mark session (for middleware protection on dashboard/etc.)
        session(['pin_verified' => true]);

        $reference = 'SD_' . substr(rand(0, time()), 0, 7);

        $account = $user->accounts()->first();

        /** 💰 CHECK BALANCE */
        if ((float) $account->balance < (float) $requestData['amount']) {
            return back()->with('error', 'Insufficient balance.');
        }

        if (!$account) {
            return back()->with('error', 'No account found for this user.');
        }

        $account_id = $account->id;

        try {
            $data = [
                'account_id' => $account_id,
                'amount' => $requestData['amount'],
                'reference' => $reference,
                'bene_account_number' => $requestData['bene_account_number'],
                'transfer_type' => $requestData['send_type'],
                'description' => $requestData['description'],
            ];
            // include crypto network when sending crypto
            if (!empty($requestData['crypto_network']) && $requestData['send_type'] === 'crypto') {
                $data['crypto_network'] = $requestData['crypto_network'];
            }
            // Log the assembled transfer payload for debugging before inserting
            Log::info('storeSend: creating Transfer with data', $data);
            $transfer = Transfer::create($data);

            // Confirm creation
            if ($transfer && $transfer->id) {
                Log::info('storeSend: Transfer created', ['id' => $transfer->id]);
            } else {
                Log::warning('storeSend: Transfer::create returned falsy value', ['result' => $transfer]);
            }

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
                'category' => 'send',
                'description' => $requestData['description'],
                'source_account' => $account->account_number,
                'destination_account' => $requestData['bene_account_number']
            ]);

            Log::info('storeSend: creating Transaction for send', [
                'account_id' => $account_id,
                'amount' => $requestData['amount'],
                'balance_before' => $account->balance + $requestData['amount'],
                'balance_after' => $account->balance - $requestData['amount'],
                'description' => $requestData['description'] ?? null,
                'source_account' => $account->account_number,
                'destination_account' => $requestData['bene_account_number']
            ]);

            return redirect()->route('user.dashboard')
                ->with('success', 'Your $' . $requestData['amount'] . ' transfer to: ' . $requestData['bene_account_number'] . ' was successful!');
        } catch (Exception $e) {
            // Log exception details for debugging
            Log::error('storeSend: exception when creating Transfer', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'payload' => $data ?? null,
            ]);
            $bene = $requestData['bene_account_number'] ?? 'this beneficiary account';

            return back()->with('error', "There was an error sending money to: {$bene}" . $e->getMessage());
        }
    }
}
