<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Draft; // Import the Draft model

class DraftController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'gig_name' => 'required|string|max:255',
            'impressions' => 'nullable|integer|min:0',
            'clicks' => 'nullable|integer|min:0',
            'orders' => 'nullable|integer|min:0',
            'cancellations' => 'nullable|integer|min:0',
        ]);

        // Store the data into 'drafts' table using the Draft model
        Draft::create($validated);

        // Fetch updated data after storing
        $drafts = Draft::all();

        // Return the view with success message
        return view('sellers.draft_gigs', ['drafts' => $drafts])->with('success', 'Draft gig stored successfully!');
    }
}
