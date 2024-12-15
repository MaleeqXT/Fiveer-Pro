<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'month' => 'required|string',
            'year' => 'required|string',
            'amount' => 'nullable|numeric',
        ]);

        Finance::create([
            'month' => $request->month,
            'year' => $request->year,
            'amount' => $request->amount,
        ]);

        return redirect()->back()->with('success');
    }
}

