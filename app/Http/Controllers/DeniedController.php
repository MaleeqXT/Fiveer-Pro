<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denied; // Import the Denied model

class DeniedController extends Controller
{
    /**
     * Store denied gig data into the database
     */
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

        // Save data into 'denieds' table
        Denied::create($validated);

        // Fetch updated data from database
        $deniedGigs = Denied::all();

        // Return the view with success message
        return view('sellers.denied_gigs', ['deniedGigs' => $deniedGigs])
            ->with('success', 'Denied gig stored successfully!');
    }
}
