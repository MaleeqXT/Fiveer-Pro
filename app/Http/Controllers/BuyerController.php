<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerController extends Controller
{
    // Store buyer data
    public function store(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'buyer_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'buyer_name' => 'required|string|max:255',
            'completed_orders' => 'required|integer|min:0',
            'amount_spent' => 'required|numeric|min:0',
            'last_order' => 'required|date',
        ]);

        // Handle image upload
        if ($request->hasFile('buyer_image')) {
            $imageName = time() . '.' . $request->buyer_image->extension();
            $request->buyer_image->move(public_path('uploads'), $imageName);
            $validatedData['buyer_image'] = 'uploads/' . $imageName;
        }

        // Store data in the database
        Buyer::create($validatedData);

        // Redirect or return response
        return redirect()->back()->with('success', 'Buyer details saved successfully!');
    }


}
