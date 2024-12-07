<?php
// BusinessDetailsController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessDetail;

class BusinessDetailsController extends Controller
{


    public function store(Request $request)
    {
        // Debugging the request

    
        // Validate the input data
        $validated = $request->validate([
            'service_plan' => 'required|string',
            'business_name' => 'required|string|max:255',
            'business_description' => 'required|string',
            'business_url' => 'nullable|url',
            'business_type' => 'required|string',
            'business_size' => 'required|string',
            'business_industry' => 'nullable|string',
            'business_stage' => 'required|string',
        ]);
    
        // Store the data in the database
        BusinessDetail::create([
            'service_plan' => $validated['service_plan'],
            'business_name' => $validated['business_name'],
            'business_description' => $validated['business_description'],
            'business_url' => $validated['business_url'],
            'business_type' => $validated['business_type'],
            'business_size' => $validated['business_size'],
            'business_industry' => $validated['business_industry'],
            'business_stage' => $validated['business_stage'],
        ]);
    
        // Redirect back with success message
        return redirect()->route('websites.complete.store')->with('success', 'Data saved successfully!');
    }
      
}
