<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Explore;
class AdminController extends Controller
{
    //
    public function admin(){
return view('dashboard.admin');
    }

       public function create(){
           return view('exploring.create');
            }

            public function show()
            {
                $data = Explore::all(); // Fetch all data from the `explore` table
                return view('exploring.show', compact('data'));
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
                    $imagePath = $request->file('image')->store('explore', 'public');
                    $validated['image'] = $imagePath;
                }
        
                // Store data in the database
                // Example: Using a Model (assumes a `FormData` model exists)
                \App\Models\Explore::create($validated);
        
                return redirect()->back()->with('success', 'Data saved successfully!');
            }

            public function update(Request $request, $id)
{
    $item = Explore::findOrFail($id);

    $item->description = $request->description;
    $item->price = $request->price;

    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('explore_images', 'public');
        $item->image = $path;
    }

    $item->save();

    return redirect()->back()->with('success', 'Data updated successfully!');
}


public function destroy($id)
{
    $item = Explore::findOrFail($id);

    if ($item->image) {
        Storage::disk('public')->delete($item->image);
    }

    $item->delete();

    return redirect()->back()->with('success', 'Data deleted successfully!');
}

}
