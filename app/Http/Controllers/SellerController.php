<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;
use App\Models\Overview;
use App\Models\Pricing;
use App\Models\Media;
use App\Models\Buyer;

class SellerController extends Controller
{
    public function index() {
        return view('selling');
    }

    public function analytics(){

        return view('sellers.index');
    }

    public function profile()
    {
        // Retrieve all gigs
        $gigs = Overview::all();
        
        // Map pricing data for each gig
        $pricing = $gigs->mapWithKeys(function ($gig) {
            // Retrieve pricing for the gig by another method
            // For example, assuming 'Overview' and 'Pricing' are related somehow (change this logic based on your database design)
            $pricing = Pricing::first(); // Or another way to fetch it without using gig_id
            
            return [
                $gig->id => [
                    'basic_price' => $pricing ? $pricing->basic_price : 100, // Default to 100 if not set
                ]
            ];
        });
        
        
        // Pass gigs, pricing, and images to the view
        return view('websites.profile', compact('gigs', 'pricing', ));
    }
    
    
    
    


    
    
    
    public function delete($id)
{
    $gig = Gig::findOrFail($id);
    $gig->delete();
    return redirect()->back()->with('success', 'Gig deleted successfully!');
}

  public function gig() {
        return view('sellers.gig');
    }

    public function plus(){

        return view('sellers.plus');
    }

        public function contact()
    {
        $buyers = Buyer::all(); // Retrieve all buyers from the database
        return view('sellers.contact', compact('buyers'));
    }
    public function proshow()
    {
        $pricing = Pricing::all()->first(); // Fetches the first record from the collection
        return view('sellers.profile', compact('pricing'));
    }
 
}  
