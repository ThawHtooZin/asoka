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

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => ['required', 'integer', 'digits_between:1,11'],
            'donate_to' => ['required', 'string', 'max:255'],
            'payment_img' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'], 
        ], [
            'payment_img.max' => 'The payment image must not exceed 2MB.', 
            'payment_img.required' => 'Please upload a payment image.',    
            'payment_img.image' => 'The file must be an image.',
            'payment_img.mimes' => 'The payment image must be in JPG, JPEG, or PNG format.',
        ]);

        // Handle image upload
        if ($request->hasFile('payment_img')) {
            $imagePath = $request->file('payment_img')->store('images/payments', 'public');
            $validatedData['payment_img'] = '/' . $imagePath; // Store the path in the DB
        }

        // Add extra fields
        $validatedData['user_id'] = Auth::id(); // Auth::id() is cleaner
        $validatedData['date'] = now();

        // Create the donation record
        Donate::create($validatedData);

        // Redirect with success message
        return redirect('/donate')->with('success', 'Thank you for your donation!');
    }
}
