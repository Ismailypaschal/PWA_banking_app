<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function Transaction(Request $request)
    {
        $user = Auth::user();

        $query = $user->transactions()->with('account');

        // 🔍 Search by Description
        if ($request->filled('search')) {
            $query->where('description', 'like', '%' . $request->search .  '%');
        }

        // 🔍 Search by Date
        if ($request->date == 'today') {
            $query->whereDate('transactions.created_at', today());
        } elseif ($request->date == 'week') {
            $query->whereBetween('transactions.created_at', [now()->startOfWeek(), now()->endOfWeek()]);
        } elseif ($request->date == 'month') {
            // use whereMonth to match the current month correctly
            $query->whereMonth('transactions.created_at', now()->month);
        }

        // 🔍 Search by Category
        if ($request->filled('category')) {
            $query->where('description', $request->category);
        }

        // 🔍 Search by Amount
        if ($request->amount == "highest") {
            $query->orderBy('amount', 'desc');
        } elseif ($request->amount == 'lowest') {
            $query->orderBy('amount', 'asc');
        }

        // 🔍 Search by Status
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // fetch the flat list first so we can compute totals correctly
        $flat = $query->latest()->get();

        $totalSpents = $flat->where('type', 'debit')->sum('amount');
        $totalIncomes = $flat->where('type', 'credit')->sum('amount');

        // then group by date for the UI
        $transactions = $flat->groupBy(function ($transaction) {
            return $transaction->created_at->toDateString();
        });

        return view('transactions', compact('transactions', 'totalSpents', 'totalIncomes'));
    }
}
