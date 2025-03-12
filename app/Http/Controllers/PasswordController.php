<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index(){
        return view("password.emailcheck");
    }

    public function email(Request $request)
    {
        // Validate the email input
        $email = $request->validate([
            'email' => 'required|email',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $email)->first();

        if (!$user) {
            // If the user is not found, redirect back with an error message
            return back()->withErrors(['email' => 'No account found with this email address.']);
        }

        // If the user exists, redirect to the password reset page
        return view('password.reset', compact('user'));
    }

    public function reset(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        // Retrieve the user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists
        if (!$user) {
            return back()->withErrors(['email' => 'No account found with this email address.']);
        }

        // Update the user's password
        $user->update([
            'password' => bcrypt($credentials['password']), // Hashing the password
        ]);

        return redirect('/login')->with('success', 'Password reset successful. Please login with your new password.');
    }


}