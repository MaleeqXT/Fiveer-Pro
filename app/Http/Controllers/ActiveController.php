<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Active;

class ActiveController extends Controller
{


    public function store(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'gig_name' => 'required|string|max:255',
            'impressions' => 'required|integer|min:0',
            'clicks' => 'required|integer|min:0',
            'orders' => 'required|integer|min:0',
            'cancellations' => 'required|integer|min:0',
        ]);
    
        // Store the data in the database
        Active::create($validated);
    
        // Fetch the updated list of active gigs
        $actives = Active::all();
    
        // Return the view with the updated list of actives and success message
        return view('sellers.gig', ['actives' => $actives])->with('success', 'Gig added successfully.');
    }
    
    

}
