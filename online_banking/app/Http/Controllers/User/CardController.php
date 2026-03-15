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
        $cards = $user->cards()->get();
        $selectedCardId = $cards->first();

        // Get the spending limit of the first/selected card
        $spendingLimit = $selectedCardId ? $selectedCardId->spending_limit : 0;

        return view('card', compact('user', 'cards', 'selectedCardId', 'spendingLimit'));
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
                'card_type' => ['required', 'string'],
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
    public function cardDetails()
    {
        $user = Auth::user();
        $card = $user->cards()->where('cards.id', request()->route('id'))->firstOrFail();
        return view('card-details', compact('user', 'card'));
    }
    public function freezeCard()
    {
        $user = Auth::user();
        $card = $user->cards()->where('cards.id', request()->route('id'))->firstOrFail();
        return view('freeze-card', compact('user', 'card'));
    }
    public function updateFreezeCard($id)
    {
        try {
            $user = Auth::user();
            $card = $user->cards()->where('cards.id', $id)->firstOrFail();
            $newStatus = $card->status === 'active' ? 'freeze' : 'active';
            $card->update(['status' => $newStatus]);
            return redirect()->route('user.card')->with('success', $newStatus === 'freeze'
                ? 'Card frozen successfully.'
                : 'Card unfrozen successfully.');
        } catch (Exception $e) {
            return back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
