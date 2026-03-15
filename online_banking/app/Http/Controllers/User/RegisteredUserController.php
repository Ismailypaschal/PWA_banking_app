<?php

namespace App\Http\Controllers\User;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;

class RegisteredUserController extends Controller
{
    public function Signup()
    {
        return view('signup');
    }
    public function storeSignUp(Request $request)
    {
        $requestData = request()->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'unique:users,email', 'email', 'string'],
            'phone' => ['required', 'unique:users,phone', 'string', 'min:10', 'max:20'],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'marital_status' => ['required', 'string'],
            'address' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'postal_code' => ['required', 'numeric'],
            'password' => ['required', 'string', 'min:6']
        ]);
        $user = User::create([
            'first_name' => $requestData['first_name'],
            'last_name' => $requestData['last_name'],
            'email' => $requestData['email'],
            'phone' => $requestData['phone'],
            'dob' => $requestData['dob'],
            'gender' => $requestData['gender'],
            'marital_status' => $requestData['marital_status'],
            'address' => $requestData['address'],
            'country' => $requestData['country'],
            'city' => $requestData['city'],
            'postal_code' => $requestData['postal_code'],
            'password' => $requestData['password'],
        ]);

        // Generate account number
        $account_number = rand(1000000000, 9999999999);
        // Create User Account details
        $account = Account::create([
            'user_id' => $user->id,
            'account_number' => $account_number,
            'currency' => 'NGN' ?? 'null',
        ]);
        // // Send verification email
        // $user->sendEmailVerificationNotification();

        // Log the user in so they can access the email verification notice
        // (the verification routes are protected by the `auth` middleware)
        Auth::login($user);

        // Redirect to verify notice page
        return redirect()->route('verification.notice');
    }
}
