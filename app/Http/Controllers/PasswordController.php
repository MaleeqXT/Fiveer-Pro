<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Password;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Save the password without requiring authentication
        Password::create([
            'user_id' => null, // or use a placeholder value like 'guest'
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully!');
    }
}
