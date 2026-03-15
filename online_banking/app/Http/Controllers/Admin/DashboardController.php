<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $admin = auth()->guard('admin')->user();
        $users = User::all();

        return view('admin.index', compact('admin', 'users'));
    }
    public function user(Request $request)
    {
        // $status = $request->status;
        // $users = User::with('accounts')
        //     ->when($status && $status !== 'all', function ($query) use ($status) {
        //         $query->where('status', $status);
        //     })
        //     ->latest()
        //     ->get();
        // return view('admin.admin-dashboard', compact('users', 'status'));
        $query = User::query();

        // Filter by status
        if ($request->status && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        // Search by first_name, last_name, or account number
        if ($request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('first_name', 'like', "%{$search}%")
                    ->orWhere('last_name', 'like', "%{$search}%")
                    ->orWhereHas('accounts', function ($q2) use ($search) {
                        $q2->where('account_number', 'like', "%{$search}%");
                    });
            });
        }
        $userAllCount = $query->count();
        $users = $query->latest()->get();

        return view('admin.admin-users', compact('users', 'userAllCount'));
    }
    public function suspendUser($id)
    {
        $user = User::findOrFail($id);
        $user_id = $user->id;

        try {
            $updateStutus = User::where('id', $user_id)->update(['status' => 'suspended']);

            return redirect()->route('admin.users')->with('success', 'User account suspended successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while suspending the user account. Please try again.']);
        }
        // $user->status = 'suspended';
        // $user->save();


    }
    public function disableUser($id)
    {
        $user = User::findOrFail($id);
        $user_id = $user->id;

        try {
            $updateStutus = User::where('id', $user_id)->update(['status' => 'inactive']);

            return redirect()->route('admin.users')->with('success', 'User account disabled successfully.');
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while disabling the user account. Please try again.']);
        }
        // $user->status = 'suspended';
        // $user->save();


    }
    public function accountStatus()
    {
        return view('admin.suspended');
    }
}
