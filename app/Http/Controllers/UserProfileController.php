<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'online_status' => 'required|string',
        ]);

        UserProfile::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'full_name' => $request->full_name,
                'email' => $request->email,
                'online_status' => $request->online_status,
                'deactivation_reason' => $request->deactivation_reason,
            ]
        );

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
