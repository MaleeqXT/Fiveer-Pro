<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{ 

    public function index()
    {
        // Retrieve all questions from the Question model
        $questions = Question::all();
    
        $lastGig = session()->has('last_gig_id') 
            ? Overview::find(session('last_gig_id')) 
            : null;
    
        // Retrieve the old pricing data from session if it exists
        $pricingData = session('pricing_data', null); // Default to null if no session data
    
        // Pass the data to the 'websites.edit' view
        return view('websites.edit', compact('questions', 'lastGig', 'pricingData'));
    }
    
    
    

    
}

