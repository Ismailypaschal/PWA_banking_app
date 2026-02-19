<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\Config\Exception\ValidationException;

class SessionUserController extends Controller
{
    public function Signin()
    {
        return view('signin');
    }
    public function storeSignin(Request $request)
    {
        try {
            $requestData = request()->validate([
                'email' => ['required', 'email', 'string'],
                'password' => ['required', 'string', 'min:6']
            ]);

            if (!Auth::attempt($requestData)) {
                throw ValidationException::withMessages([
                    'email' => 'Sorry, incorrect email or password'
                ]);
            }
            return redirect()->route('user.pin');
        } catch (ValidationException $e) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
}
