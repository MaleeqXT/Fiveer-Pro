<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Description;

class DescriptionController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:1000', // Validation rules
        ]);

        Description::create([
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'Description saved successfully!');
    }
}
