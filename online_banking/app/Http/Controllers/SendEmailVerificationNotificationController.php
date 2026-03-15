<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class SendEmailVerificationNotificationController extends Controller
{
    public function sendNotification()
    {
        return view('auth.mail.notification');
    }
    public function verificationRequest(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->route('user.pin'); // after verification
    }
    public function linkConfirm(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }
}
