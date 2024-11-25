<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Overview;
class OverviewController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'sub_category' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'website_type' => 'required|string|max:255',
            'tags' => 'nullable|string',
        ]);

        Overview::create($validated);

        return response()->json(['message' => 'Gig created successfully!']);
    }
}
