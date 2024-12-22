<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

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
    
   }
