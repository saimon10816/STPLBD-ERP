<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', ['user' => $user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'bio' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'avatar' => 'nullable|image|max:2048',
        ]);

        $user = Auth::user();
        $profile = $user->profile;

        // Update profile information
        $profile->update($request->all());

        if ($request->hasFile('avatar')) {
            // Store the new avatar
            $path = $request->file('avatar')->store('avatars', 'public');
            $profile->update(['avatar' => $path]);
        }

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}


