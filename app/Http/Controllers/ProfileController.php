<?php

namespace App\Http\Controllers;

use App\Models\BookPurchase;
use App\Models\CoursePurchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $Courses = CoursePurchase::where('user_id', '=', $user->id)->where('status', '!=', 'achived')->orderByDesc('created_at')->get();
        $Books = BookPurchase::where('user_id', '=', $user->id)->where('status', '!=', 'achived')->orderByDesc('created_at')->get();
        return view('profile.index', compact('user', 'Courses', 'Books'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $user = User::find($request->id);

        if ($user) {
            $dataToUpdate = $request->only(['name', 'email', 'phone', 'address']);
            $user->update($dataToUpdate);

            session()->flash('success', 'Profile Updated successfully!');
            return redirect('/profile');
        }
    }

    public function updateProfilePicture(Request $request)
    {
        // Validate the profile picture
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Accept only images
        ]);

        // Fetch the authenticated user
        $user = Auth::user();

        if ($user) {
            // Handle the profile picture upload
            if ($request->hasFile('profile_picture')) {
                $file = $request->file('profile_picture');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('images/profile', $fileName, 'public');

                // Save the path in the database
                $user->image = '/storage/' . $filePath;

                // Optional: Delete old profile picture file if it exists
                if ($user->image && Storage::exists('public/' . str_replace('/storage/', '', $user->image))) {
                    Storage::delete('public/' . str_replace('/storage/', '', $user->image));
                }

                $user->save();

                session()->flash('success', 'Profile picture updated successfully!');
                return redirect('/profile');
            }
        }

        return response()->json(['error' => 'Something went wrong!'], 500);
    }
}
