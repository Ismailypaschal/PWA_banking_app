<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CardController extends Controller
{
    public function Card()
    {
        $user = Auth::user();
        return view('card', compact('user'));
    }
    public function addCard()
    {
        return view('card-generate');
    }
    public function storeCard()
    {
        try {
            $requestData = request()->validate([
                'card_name' => ['required', 'string', 'max:255'],
                'card_type' => ['required', 'string', 'in:Visa,Mastercard, Verve, American Express, Discover'],
                'spending_limit' => ['required', 'numeric', 'min:0'],
                'card_cvv' => ['required', 'string'],
                'card_number' => ['required', 'string'],
                'expiry_date' => ['required', 'string'],
                'purpose' => ['required', 'string'],
            ]);
            $user = Auth::user();
            $account = $user->accounts()->first();
            if (!$account) {
                throw new Exception('No Account found for user');
            }

            $expiry = Carbon::createFromFormat('m/y', $requestData['expiry_date'])
                ->endOfMonth()
                ->format('Y-m-d');


            $data = [
                'account_id' => $account->id,
                'card_name' => $requestData['card_name'],
                'type' => $requestData['card_type'],
                'spending_limit' => $requestData['spending_limit'],
                'card_cvv' => $requestData['card_cvv'],
                'card_number' => $requestData['card_number'],
                'purpose' => $requestData['purpose'],
                'expiry_date' => $expiry,
            ];
            Log::info('storeCard: creating Card with data', $data);

            Card::create($data);


            return redirect()->route('user.card')->with('success', 'Virtual card created successfully.');
        } catch (Exception $e) {
            return back()->with('error', 'An error occurred while creating the card: ' . $e->getMessage());
        }
    }
}
