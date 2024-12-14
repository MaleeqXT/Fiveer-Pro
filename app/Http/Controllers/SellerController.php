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

    public function profile() {
        // Retrieve saved gig title and pricing
        $overview = Overview::find(session('last_gig_id')); // Retrieve the gig by its ID
        $pricing = session('pricing_data'); // Get pricing data from the session
    
        return view('websites.profile', [
            'overview' => $overview,
            'pricing' => $pricing,
            'gig_images' => session('gig_images'), // Images stored in session
        ]);
    }
    



    public function gig() {
        return view('sellers.gig');
    }

    public function plus(){

        return view('sellers.plus');
    }

    public function contact(){
        return view('messages.contact');
    }
    public function proshow()
    {
        // Retrieve pricing data from the database
        $pricing = Pricing::latest()->first();  // Adjust this to get the right pricing, like by seller or gig ID.
    
        // Pass the pricing data to the view
        return view('sellers.profile', compact('pricing'));
    }
}    
