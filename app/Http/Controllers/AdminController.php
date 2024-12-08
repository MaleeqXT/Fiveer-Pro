<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin(){
return view('dashboard.admin');
    }

       public function create(){
           return view('exploring.create');
            }

        public function show(){
            return view('exploring.show');
            }


            public function store(Request $request)
            {
                $validated = $request->validate([
                    'description' => 'required|string|max:255',
                    'price' => 'required|numeric|min:0',
                    'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                ]);
        
                // Handle the image upload
                if ($request->hasFile('image')) {
                    $imagePath = $request->file('image')->store('images', 'public');
                    $validated['image'] = $imagePath;
                }
        
                // Store data in the database
                // Example: Using a Model (assumes a `FormData` model exists)
                \App\Models\Explore::create($validated);
        
                return redirect()->back()->with('success', 'Data saved successfully!');
            }
}
