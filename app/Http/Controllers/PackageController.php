<?php

namespace App\Http\Controllers;


use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'feature_quick_bug_fixes' => 'nullable|string',
            'bug_fixes_basic' => 'nullable|boolean',
            'bug_fixes_standard' => 'nullable|boolean',
            'bug_fixes_premium' => 'nullable|boolean',
            'feature_custom_laravel' => 'nullable|string',
            'custom_features_basic' => 'nullable|boolean',
            'custom_features_standard' => 'nullable|boolean',
            'custom_features_premium' => 'nullable|boolean',
            'feature_responsive_website' => 'nullable|string',
            'responsive_basic' => 'nullable|boolean',
            'responsive_standard' => 'nullable|boolean',
            'responsive_premium' => 'nullable|boolean',
            'pages_basic' => 'nullable|integer',
            'pages_standard' => 'nullable|integer',
            'pages_premium' => 'nullable|integer',
            'revisions_basic' => 'nullable|integer',
            'revisions_standard' => 'nullable|integer',
            'revisions_premium' => 'nullable|string',
            'content_upload_basic' => 'nullable|boolean',
            'content_upload_standard' => 'nullable|boolean',
            'content_upload_premium' => 'nullable|boolean',
            'plugins_basic' => 'nullable|boolean',
            'plugins_standard' => 'nullable|boolean',
            'plugins_premium' => 'nullable|boolean',
            'price_basic' => 'nullable|integer',
            'price_standard' => 'nullable|integer',
            'price_premium' => 'nullable|integer',
            'extra_option' => 'nullable|string',
        ]);

        Package::create($validated);

        return redirect()->back()->with('success', 'Package details saved successfully!');
    }
}

