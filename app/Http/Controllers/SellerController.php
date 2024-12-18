<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;
use App\Models\Overview;
use App\Models\Pricing;
use App\Models\Media;
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
            $price = Pricing::where('gig_id', $gig->id)->first();
            return [
                $gig->id => [
                    'basic_price' => $price ? $price->basic_price : 100,
                ],
            ];
        });
    
        // Fetch images for each gig
        $gig_images = $gigs->mapWithKeys(function ($gig) {
            $images = Media::where('gig_id', $gig->id)
                           ->where('type', 'image')
                           ->pluck('path')
                           ->toArray();
            return [$gig->id => $images];
        });
    
        return view('websites.profile', compact('gigs', 'pricing', 'gig_images'));
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

    public function contact(){
        return view('sellers.contact');
    }
    public function proshow()
    {
        $pricing = Pricing::all()->first(); // Fetches the first record from the collection
        return view('sellers.profile', compact('pricing'));
    }
 
}  
