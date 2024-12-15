<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:accounts,email',
            'online_status' => 'required|string',
        ]);
    
        Account::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'online_status' => $request->input('online_status'),
        ]);
    
        return redirect()->back()->with('success', 'Account details saved successfully!');
    }
    
}
