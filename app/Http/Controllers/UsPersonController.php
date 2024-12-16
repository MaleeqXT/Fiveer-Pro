<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsPerson;

class UsPersonController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'is_us_person' => 'required|boolean',
            ]);

            UsPerson::create([
                'name' => auth()->user() ? auth()->user()->name : 'Guest',
                'is_us_person' => $request->input('is_us_person'),
            ]);

            return redirect()->back()->with('success', 'Details updated successfully.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
}
