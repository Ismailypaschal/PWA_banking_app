<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $requestData = request()->validate([
            'card_name' => ['required', 'string', 'max:255'],
            'card_type' => ['required', 'string', 'in:Visa,Master card,Verve,American Express,Discover'],
            'spending_limit' => ['required', 'numeric', 'min:0'],
            'card_cvv' => ['required', 'string'],
            'card_number' => ['required', 'string'],
            'expiry_date' => ['required', 'string'],
            'purpose' => ['required', 'string'],
        ]);
        $user = Auth::user();
        $account = $user->accounts()->first();

        Card::create([
            'user_id' => $user->id,
            'acount_id' => $account->id,
            'card_name' => $requestData['card_name'],
            'card_type' => $requestData['card_type'],
            'spending_limit' => $requestData['spending_limit'],
        ]);
    }
}
