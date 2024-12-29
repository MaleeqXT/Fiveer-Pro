<?php


namespace App\Http\Controllers;

use App\Models\GigMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GigMediaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'gig_videos.*' => 'nullable|mimes:mp4,mov,avi|max:10240',
            'gig_documents.*' => 'nullable|mimes:pdf,doc,docx,ppt,txt|max:5120',
        ]);

        $gigId = 1; // Replace with the actual gig ID logic

        // Handle Images
        if ($request->hasFile('gig_images')) {
            foreach ($request->file('gig_images') as $image) {
                $filePath = $image->store('gig_images', 'public');
                GigMedia::create([
                    'gig_id' => $gigId,
                    'file_path' => $filePath,
                    'file_type' => 'image',
                ]);
            }
        }

        // Handle Videos
        if ($request->hasFile('gig_videos')) {
            foreach ($request->file('gig_videos') as $video) {
                $filePath = $video->store('gig_videos', 'public');
                GigMedia::create([
                    'gig_id' => $gigId,
                    'file_path' => $filePath,
                    'file_type' => 'video',
                ]);
            }
        }

        // Handle Documents
        if ($request->hasFile('gig_documents')) {
            foreach ($request->file('gig_documents') as $document) {
                $filePath = $document->store('gig_documents', 'public');
                GigMedia::create([
                    'gig_id' => $gigId,
                    'file_path' => $filePath,
                    'file_type' => 'document',
                ]);
            }
        }

        return redirect()->back()->with('success', 'Gig media uploaded successfully.');
    }
}
