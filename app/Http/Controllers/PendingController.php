<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pending;

class PendingController extends Controller
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

        // Store the data in the database
        Pending::create($validated);

        // Fetch the updated list of pending gigs
        $pendings = Pending::all();

        // Return the view with the updated list of pendings and success message
        return view('sellers.pending_gigs', ['pendings' => $pendings])->with('success', 'Pending gig stored successfully!');
    }
}
