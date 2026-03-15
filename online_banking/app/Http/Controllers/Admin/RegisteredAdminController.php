<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisteredAdminController extends Controller
{
    public function signup()
    {
        return view('admin.signup');
    }
    public function storeSignup(Request $request)
    {
        $requestdata = request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        try {
            $data = [
                'first_name' => $requestdata['first_name'],
                'last_name' => $requestdata['last_name'],
                'email' => $requestdata['email'],
                'password' => Hash::make($requestdata['password']),
            ];
            $admin = Admin::create($data);

            return redirect()->route('admin.signin')->with('success', 'Admin account created successfully. Please sign in.');
        } catch (Exception $e) {
            return back()->with(['error' => 'An error occurred while creating the admin account. Please try again.']);
        }
    }
}
