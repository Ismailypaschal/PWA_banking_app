<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function Transaction()
    {
        $user = Auth::user();

        $transactions = $user->transactions()
        ->latest()
        ->with('account')
        ->get()
        ->groupBy(function($transaction) {
            return $transaction->created_at->toDateString();
        });

        $totalSpents = $transactions
        ->where('type', 'debit')
        ->sum('amount');

        $totalIncomes = $transactions
        ->where('type', 'credit')
        ->sum('amount');

        return view('transactions', compact('transactions', 'totalSpents', 'totalIncomes'));
    }
}
