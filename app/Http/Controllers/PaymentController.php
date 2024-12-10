<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Billing;
class PaymentController extends Controller
{
    //
    public function pay() {
        return view('messages.payment');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'date' => 'required|date',
            'document' => 'required|string|max:255',
            'services' => 'required|string',
            'order' => 'nullable|string|max:255',
            'currency' => 'required|string|max:10',
            'pdf' => 'nullable|string|max:255',
        ]);

        // Store the data in the database
        Payment::create($validated);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Payment successfully stored!');
    }
    
    public function storebill(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'company_name' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'state_region' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'tax_id' => 'nullable|string|max:50',
        ]);

        // Handle email_invoices field
        $validated['email_invoices'] = $request->has('email_invoices') ? 1 : 0;

        try {
            // Store data in the database
            Billing::create($validated);

            // Redirect with success message
            return redirect()->back()->with('success', 'Billing information saved successfully!');
        } catch (\Exception $e) {
            // Redirect with error message
            return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
        }
    }
}
