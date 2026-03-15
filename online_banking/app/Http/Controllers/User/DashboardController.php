<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $user = Auth::user();
        $account = $user->accounts->first();

        $transactions = $user->transactions()
            ->latest()
            ->take(3)
            ->with('account')
            ->get();

        $t = Carbon::now()->format('H');
        if ($t < 12) {
            $greetingUser = 'Good Morning';
        } else if ($t < 17) {
            $greetingUser = 'Good afternoon';
        } else {
            $greetingUser = 'Good evening';
        }

        return view('dashboard', compact('user', 'greetingUser', 'account', 'transactions'));
    }
    // public function Transaction() {
    //     return view('transactions');
    // }
    public function Transfer()
    {
        return view('transfer');
    }
    public function Send()
    {
        return view('send');
    }
    public function Profile()
    {
        $user = Auth::user();
        $account = $user->accounts()->first();
        return view('profile', compact('user', 'account'));
    }
    public function Account()
    {

        $user = Auth::user();
        $account = $user->accounts()->first();

        return view('account-details', compact('user', 'account'));
    }
    public function Deposit()
    {
        return view('deposit');
    }
    public function Support()
    {
        return view('support');
    }
    public function Card()
    {
        return view('card');
    }
    public function Receipt()
    {
        return view('receipt');
    }
}
