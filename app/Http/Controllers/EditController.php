<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Question;
use App\Models\Overview;
use App\Models\Pricing;
use App\Models\Faq;
use App\Models\GigDetail;
use App\Models\Media;
class EditController extends Controller
{
    public function index()
    {
        // Retrieve all questions from the Question model
        $questions = Question::all();
    
        // Retrieve the last saved Gig data if available
        $lastGig = session()->has('last_gig_id') 
            ? Overview::find(session('last_gig_id')) 
            : null;
    
        // Retrieve the old pricing data from session if it exists
        $pricingData = session('pricing_data', null); // Default to null if no session data
    
        // Pass the data to the 'websites.edit' view
        return view('websites.edit', compact('questions', 'lastGig', 'pricingData'));
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

    // Save the gig data to the database
    $overview = Overview::updateOrCreate(
        ['id' => session('last_gig_id')], // Check if there's an existing draft
        $request->only(['title', 'category', 'sub_category', 'service_type', 'website_type', 'tags'])
    );

    // Store the last saved gig ID in the session
    session(['last_gig_id' => $overview->id]);

    return redirect()->back()->with('success', 'Gig saved successfully!');
}


public function savePricing(Request $request)
{
    // Validate the form data
    $validated = $request->validate([
        'basic_pages' => 'nullable|integer|min:0',
        'standard_pages' => 'nullable|integer|min:0',
        'premium_pages' => 'nullable|integer|min:0',
        'basic_price' => 'nullable|integer|min:5',
        'standard_price' => 'nullable|integer|min:5',
        'premium_price' => 'nullable|integer|min:5',
    ]);

    // Save the pricing to the database
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

    // Store the pricing data in session to retain old values until published
    session(['pricing_data' => $request->all()]);

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

    public function storefaq(Request $request)
    {
        $data = $request->validate([
            'description' => 'required|string',
            'milestones_enabled' => 'nullable|boolean',
            'faq_questions' => 'nullable|array', // Array of questions
            'faq_answers' => 'nullable|array',   // Array of answers
        ]);
    
        // Store data in session
        session()->put('description', $data['description']);
        session()->put('milestones_enabled', $data['milestones_enabled'] ?? false);
    
        if (isset($data['faq_questions'])) {
            session()->put('faq_questions', $data['faq_questions']);
        } else {
            session()->forget('faq_questions'); // Clear session if no questions
        }
    
        if (isset($data['faq_answers'])) {
            session()->put('faq_answers', $data['faq_answers']);
        } else {
            session()->forget('faq_answers'); // Clear session if no answers
        }
    
        // Save gig details in the database
        $gigDetail = GigDetail::create([
            'description' => $data['description'],
            'milestones_enabled' => $data['milestones_enabled'] ?? false,
        ]);
    
        // Save FAQs if provided
        if (!empty($data['faq_questions']) && !empty($data['faq_answers'])) {
            foreach ($data['faq_questions'] as $index => $question) {
                $gigDetail->faqs()->create([
                    'question' => $question,
                    'answer' => $data['faq_answers'][$index] ?? null,
                ]);
            }
        }
    
        return redirect()->back()->with('success', 'Gig details saved successfully!');
    }
    
    

    public function show($id)
    {
        $gigDetail = GigDetail::with('faqs')->findOrFail($id);

        return view('gig-detail.show', compact('gigDetail'));
    }



    
    public function storeGigMedia(Request $request)
    {
        $rules = [
            'gig_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gig_videos.*' => 'nullable|mimes:mp4,mov,avi|max:10240',
            'gig_documents.*' => 'nullable|mimes:pdf,doc,docx,ppt,txt|max:5120',
        ];
    
        $request->validate($rules);
    
        $mediaTypes = [
            'gig_images' => ['type' => 'image', 'folder' => 'gigs/images'],
            'gig_videos' => ['type' => 'video', 'folder' => 'gigs/videos'],
            'gig_documents' => ['type' => 'document', 'folder' => 'gigs/documents'],
        ];
    
        $mediaRecords = [];
    
        foreach ($mediaTypes as $inputName => $mediaInfo) {
            if ($request->hasFile($inputName)) {
                foreach ($request->file($inputName) as $file) {
                    $path = $file->store($mediaInfo['folder'], 'public');
                    $mediaRecords[] = [
                        'type' => $mediaInfo['type'],
                        'path' => $path,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }
        }
    
        if (!empty($mediaRecords)) {
            Media::insert($mediaRecords);
        }
    
        // Store file paths in session
        session()->put('gig_images', array_map(fn($record) => $record['path'], array_filter($mediaRecords, fn($r) => $r['type'] === 'image')));
        session()->put('gig_videos', array_map(fn($record) => $record['path'], array_filter($mediaRecords, fn($r) => $r['type'] === 'video')));
        session()->put('gig_documents', array_map(fn($record) => $record['path'], array_filter($mediaRecords, fn($r) => $r['type'] === 'document')));
    
        return redirect()->back()
            ->with('success', 'Gig media saved successfully!');
    }
    

    
    
    

    
}

