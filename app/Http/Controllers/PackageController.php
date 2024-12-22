<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackagesController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data (optional but recommended)
        $request->validate([
            'feature_quick_bug_fixes' => 'nullable|string',
            'bug_fixes_basic' => 'nullable|boolean',
            'bug_fixes_standard' => 'nullable|boolean',
            'bug_fixes_premium' => 'nullable|boolean',
            // Add validations for other fields as necessary
        ]);

        // Insert data into the database
        $package = new Package();
        $package->feature_quick_bug_fixes = $request->feature_quick_bug_fixes;
        $package->bug_fixes_basic = $request->bug_fixes_basic ? 1 : 0;
        $package->bug_fixes_standard = $request->bug_fixes_standard ? 1 : 0;
        $package->bug_fixes_premium = $request->bug_fixes_premium ? 1 : 0;
        // Add other fields
        $package->save();

        return redirect()->back()->with('success', 'Package data saved successfully!');
    }
}
