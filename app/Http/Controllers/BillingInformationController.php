<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillingInformation;

class BillingInformationController extends Controller
{
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'full_name' => 'required|string',
            'company_name' => 'nullable|string',
            'country' => 'required|string',
            'state_region' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string',
            'tax_id' => 'nullable|string',
            'email_invoices' => 'boolean',
        ]);
    
        BillingInformation::create($validated);
    
        return redirect()->back()->with('success', 'Billing information saved successfully.');
    }
    
}

