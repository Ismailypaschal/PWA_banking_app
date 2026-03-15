<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionAdminController extends Controller
{
    public function signin()
    {
        return view('admin.signin');
    }
    public function storeSignin(Request $request)
    {
        $requestData = request()->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'string', 'min:6']
        ]);

        if (!Auth::guard('admin')->attempt($requestData)) {
            // throw ValidationException::withMessages([
            //     'email' => 'Sorry, incorrect email or password'
            // ]);
            return back()->withErrors(['error' => 'An error occurred while creating the admin account. Please try again.']);
        }
        return redirect()->route('admin.dashboard');
    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('admin.signin');
    }
}
