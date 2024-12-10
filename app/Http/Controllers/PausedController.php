<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paused;

class PausedController extends Controller
{
    /**
     * Store a newly created paused gig in the database.
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

        // Save the data to the database
        Paused::create($validated);

        // Fetch updated data and return the view
        $pausedGigs = Paused::all();

        return view('sellers.paused_gigs', ['pausedGigs' => $pausedGigs])
            ->with('success', 'Paused gig stored successfully!');
    }
}
