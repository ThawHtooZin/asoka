<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\PasswordResetMail;

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

        // Generate a token and save it to the user
        $token = Str::random(60);
        $user->update(['remember_token' => $token]);

        // Send password reset email
        Mail::to($user->email)->send(new PasswordResetMail($user, $token));

        // Redirect back with success message
        return back()->with('success', 'Password reset link has been sent to your email.');
    }

    public function showResetForm(Request $request)
    {
        $token = $request->query('token');
        $email = $request->query('email');

        // Verify the token
        $user = User::where('email', $email)->where('remember_token', $token)->first();

        if (!$user) {
            return redirect('/password/reset')->withErrors(['email' => 'Invalid or expired token.']);
        }

        return view('password.reset', compact('user', 'token'));
    }

    public function reset(Request $request)
    {
        // Validate the request
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'token' => 'required'
        ]);

        // Retrieve the user by email and token
        $user = User::where('email', $credentials['email'])->where('remember_token', $credentials['token'])->first();

        // Check if user exists
        if (!$user) {
            return back()->withErrors(['email' => 'Invalid or expired token.']);
        }

        // Update the user's password and clear the token
        $user->update([
            'password' => bcrypt($credentials['password']), // Hashing the password
            'remember_token' => null
        ]);

        return redirect('/login')->with('success', 'Password reset successful. Please login with your new password.');
    }
}