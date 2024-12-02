<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Overview;

class OverviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'gig_title'    => 'required|string|max:255',
            'category'     => 'required|string|max:255',
            'sub_category' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'website_type' => 'required|string|max:255',
            'tags'         => 'required|string|max:255',
        ]);

        // Create a new Overview entry
        Overview::create([
            'gig_title'    => $request->input('gig_title'),
            'category'     => $request->input('category'),
            'sub_category' => $request->input('sub_category'),
            'service_type' => $request->input('service_type'),
            'website_type' => $request->input('website_type'),
            'tags'         => $request->input('tags'),
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Overview saved successfully!');
    }
}
