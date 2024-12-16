<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;
use App\Models\Overview;
use App\Models\Pricing;
class SellerController extends Controller
{
    public function index() {
        return view('selling');
    }

    public function analytics(){

        return view('sellers.index');
    }

    public function profile(Request $request) {
        // Retrieve all gigs from the database
        $gigs = Overview::all(); // Fetch all gigs from the database
    
        // Assuming pricing data is stored in session for now
        $pricing = session('pricing_data'); // Get pricing data from the session
        
        // Retrieve images from the session
        $gig_images = session('gig_images'); 
    
        // If a new gig has been created, store it in the database and session (if needed)
        if ($request->isMethod('post')) {
            // Save the new gig to the database
            $newGig = new Overview();
            $newGig->title = $request->input('title');
            $newGig->description = $request->input('description');
            $newGig->save();
    
            // Optionally, you can add the new gig's data to the session to display it immediately
            // If you use session, you could store the new gig's ID in a session array.
            // Example:
            // $gigs = session('gigs', []);  // Get gigs from session, or use an empty array
            // $gigs[] = $newGig->id; // Add the new gig ID
            // session(['gigs' => $gigs]); // Store updated gigs list in session
    
            // Or directly add the new gig to the $gigs array (if not using session)
            $gigs->push($newGig);
        }
    
        return view('websites.profile', [
            'gigs' => $gigs,  // Pass all gigs to the view
            'pricing' => $pricing,
            'gig_images' => $gig_images,
        ]);
    }
    
    
    



    public function gig() {
        return view('sellers.gig');
    }

    public function plus(){

        return view('sellers.plus');
    }

    public function contact(){
        return view('sellers.contact');
    }
    public function proshow()
    {
        $pricing = Pricing::all()->first(); // Fetches the first record from the collection
        return view('sellers.profile', compact('pricing'));
    }
    
}    
