<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonateController extends Controller
{
    public function index()
    {
        return view('donate.index');
    }

    public function create(Request $request){
        
        $credentials = $request->validate([
            'amount' => ['required', 'integer', 'max_digits:11'],
            'donate_to' => ['required', 'string', 'max:255'],
            'payment_img' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);

        if ($request->hasFile('payment_img')) {
            // Store the file in the 'images/payments' directory in the public disk
            $imagePath = $request->file('payment_img')->store('images/payments', 'public');
            $credentials['payment_img'] = '/' . $imagePath; // Store the path in database format
        }
        $credentials['user_id'] = Auth::user()->id; // Adds the current timestamp
        $credentials['date'] = now(); // Adds the current timestamp

        Donate::create($credentials);
        return redirect('/donate')->with('success', 'Thank you for your donation!');
    }
}
