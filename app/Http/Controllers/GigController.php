<?php
namespace App\Http\Controllers;

use App\Models\Gig;

use Illuminate\Http\Request;

class GigController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'sub_category' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'metadata' => 'nullable|string|max:255',
            'tags' => 'nullable|string|max:255',
        ]);

        Gig::create($validated);

        return redirect()->back()->with('success', 'Gig created successfully!');
    }
}
