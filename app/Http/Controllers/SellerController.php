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
           
        // Pass gigs, pricing, and images to the view
        return view('websites.profile');
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
        return view('sellers.profile');
    }
 
}  
