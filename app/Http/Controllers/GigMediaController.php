<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GigMedia;
use Illuminate\Support\Facades\Storage;

class GigMediaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gig_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gig_videos.*' => 'mimes:mp4,mov,ogg,qt|max:20000',
            'gig_documents.*' => 'mimes:pdf,doc,docx,ppt,txt|max:5120',
        ]);

        // Handle Images
        if ($request->hasFile('gig_images')) {
            foreach ($request->file('gig_images') as $image) {
                $path = $image->store('gig_images', 'public');
                GigMedia::create([
                    'type' => 'image',
                    'path' => $path,
                ]);
            }
        }

        // Handle Videos
        if ($request->hasFile('gig_videos')) {
            foreach ($request->file('gig_videos') as $video) {
                $path = $video->store('gig_videos', 'public');
                GigMedia::create([
                    'type' => 'video',
                    'path' => $path,
                ]);
            }
        }

        // Handle Documents
        if ($request->hasFile('gig_documents')) {
            foreach ($request->file('gig_documents') as $document) {
                $path = $document->store('gig_documents', 'public');
                GigMedia::create([
                    'type' => 'document',
                    'path' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Gig media uploaded successfully!');
    }
}
