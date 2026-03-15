<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;

class UpdateProfileController extends Controller
{
    public function updateProfilePhoto(Request $request)
    {
        try {
            $requestData = $request->validate([
                'profile_photo' => ['required', 'image', 'max:255', File::types(['png', 'jpg', 'svg', 'webp'])->max(2048)]
            ]);
            if ($request->hasFile('profile_photo')) {
                $file = $request->file('profile_photo');
                $filename = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('photos', $filename, 'public');
                $requestData['profile_photo'] = '/storage/' . $filePath;
            }
            $user = Auth::user();
            User::where('id', $user->id)->update([
                "profile_photo" => $requestData['profile_photo']
            ]);

            return redirect()->route('user.profile')->with('success', 'Your profile photo has been update!');
        } catch (Exception $e) {
            return back()->with('error', 'There was an error updating your profile photo' . $e->getMessage());
        }
    }
    public function updatePassword(Request $request)
    {
        try {
            $requestData = request()->validate([
                'old_password' => ['required', 'string'],
                'new_password' => ['required', 'string', 'min:6']
            ]);
            $user = Auth::user();
            $oldPassword = $user->password;
            if (!Hash::check($requestData['old_password'], $oldPassword)) {
                return back()->withErrors(['old_password' => 'Old password is incorrect!']);
            }
            User::where('id', $user->id)->update([
                'password' => Hash::make($requestData['new_password'])
            ]);

            return redirect()->route(route: 'user.profile')->with('success', 'Your security password has been update!');
        } catch (Exception $e) {
            return back()->with('error', 'There was an error updating password: ' . $e->getMessage());
        }
    }
    public function updateSecurityPin(Request $request)
    {

        try {
            $requestData = request()->validate([
                'old_pin' => ['required', 'string'],
                'new_pin' => ['required', 'string']
            ]);
            $user = Auth::user();
            $oldPin = $user->security_pin;
            if (!Hash::check($requestData['old_pin'], $oldPin)) {
                return back()->withErrors(['old_pin' => 'Old Pin is incorrect!']);
            }
            User::where('id', $user->id)->update([
                'security_pin' => Hash::make($requestData['new_pin'])
            ]);
            return redirect()->route(route: 'user.profile')->with('success', 'Your security pin has been update!');
        } catch (Exception $e) {
            return back()->with('error', 'There was an error updating pin: ' . $e->getMessage());
        }
    }
}
