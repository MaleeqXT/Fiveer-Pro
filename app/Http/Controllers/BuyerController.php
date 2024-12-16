<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;

class BuyerController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'buyer_image' => 'required|image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
            'buyer_name' => 'required|string|max:255',
            'completed_orders' => 'required|integer',
            'amount_spent' => 'required|numeric',
            'last_order' => 'required|date',
        ]);

        // Handle file upload
        if ($request->hasFile('buyer_image')) {
            $imageName = time() . '.' . $request->buyer_image->extension();
            $request->buyer_image->move(public_path('uploads'), $imageName);
            $validatedData['buyer_image'] = $imageName;
        }

        // Store the buyer details in the database
        Buyer::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Buyer details added successfully!');
    }
}
