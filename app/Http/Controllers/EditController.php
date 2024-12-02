<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Overview;
use App\Models\Pricing;

class EditController extends Controller
{
    public function index() {
        // Get all questions to show on the page
        $questions = Question::all();
        return view('websites.edit', compact('questions'));
    }


    public function storeover(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'sub_category' => 'required|string|max:255',
            'service_type' => 'required|string|max:255',
            'website_type' => 'required|string|max:255',
            'tags' => 'nullable|string',
        ]);

        Overview::create($request->only([
            'title', 'category', 'sub_category', 'service_type', 'website_type', 'tags'
        ]));

        return redirect()->back()->with('success', 'Gig saved successfully!');
    }

    public function savePricing(Request $request)
{
    $validated = $request->validate([
        'basic_pages' => 'nullable|integer|min:0',
        'standard_pages' => 'nullable|integer|min:0',
        'premium_pages' => 'nullable|integer|min:0',
        'basic_price' => 'nullable|integer|min:5',
        'standard_price' => 'nullable|integer|min:5',
        'premium_price' => 'nullable|integer|min:5',
    ]);

    $pricing = new Pricing();
    $pricing->basic_pages = $request->basic_pages;
    $pricing->standard_pages = $request->standard_pages;
    $pricing->premium_pages = $request->premium_pages;

    $pricing->basic_revisions = $request->basic_revisions;
    $pricing->standard_revisions = $request->standard_revisions;
    $pricing->premium_revisions = $request->premium_revisions;

    $pricing->basic_content_upload = $request->has('basic_content_upload');
    $pricing->standard_content_upload = $request->has('standard_content_upload');
    $pricing->premium_content_upload = $request->has('premium_content_upload');

    $pricing->basic_plugins = $request->has('basic_plugins');
    $pricing->standard_plugins = $request->has('standard_plugins');
    $pricing->premium_plugins = $request->has('premium_plugins');

    $pricing->basic_ecommerce = $request->has('basic_ecommerce');
    $pricing->standard_ecommerce = $request->has('standard_ecommerce');
    $pricing->premium_ecommerce = $request->has('premium_ecommerce');

    $pricing->basic_products = $request->basic_products;
    $pricing->standard_products = $request->standard_products;
    $pricing->premium_products = $request->premium_products;

    $pricing->basic_payment = $request->has('basic_payment');
    $pricing->standard_payment = $request->has('standard_payment');
    $pricing->premium_payment = $request->has('premium_payment');

    $pricing->basic_speed = $request->has('basic_speed');
    $pricing->standard_speed = $request->has('standard_speed');
    $pricing->premium_speed = $request->has('premium_speed');

    $pricing->basic_social_media = $request->has('basic_social_media');
    $pricing->standard_social_media = $request->has('standard_social_media');
    $pricing->premium_social_media = $request->has('premium_social_media');

    $pricing->basic_price = $request->basic_price;
    $pricing->standard_price = $request->standard_price;
    $pricing->premium_price = $request->premium_price;

    $pricing->save();

    return back()->with('success', 'Pricing saved successfully!');
}

    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        // Save the question in the database
        Question::create([
            'question' => $request->question,
        ]);

        // Redirect back to the page with the list of questions
        return redirect()->route('websites.edit')->with('success', 'Question added successfully');
    }
    
}

