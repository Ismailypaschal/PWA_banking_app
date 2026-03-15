<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
            $user = Auth::user();
            //  Check if user is suspended
            if ($user->status === 'suspended') {
                Auth::logout();
                return redirect()->route('user.suspended');
            }
            //  Check if user is suspended
            if ($user->status === 'inactive') {
                Auth::logout();
                return back()->with('error', 'This user account is inactive.');
            }
            return redirect()->route('user.pin');
        } catch (ValidationException $e) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
    }
    public function suspended()
    {
        return view('admin.suspended');
    }
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Clear PIN Verification
        $request->session()->forget('pin_verified');

        return redirect()->route('user.signin');
    }
}
