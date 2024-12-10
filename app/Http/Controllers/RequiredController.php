<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Required;

class RequiredController extends Controller
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
        Required::create($validated);

        // Fetch the updated list of 'Required' data
        $requiredGigs = Required::all();

        // Return the view with the updated list and success message
        return view('services.required_gigs', ['requiredGigs' => $requiredGigs])
            ->with('success', 'Required gig stored successfully!');
    }
}
