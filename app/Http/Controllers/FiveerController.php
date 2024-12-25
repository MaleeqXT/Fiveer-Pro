<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Question;
use App\Models\UsPerson;


class FiveerController extends Controller
{

    public function index() {
        return view('buying');
    }

    public function showall(){
        return view('websites.index');
    }

    public function inspired(){
        return view('websites.inspired');
    }

    public function breifs(){
        return view('messages.breifs');
    }
    
    public function earning(){
        return view('websites.earning');
    }

    public function help(){

        return view('supports.help');
    }

    

    public function indexs()
    {
        
    
        $lastGig = session()->has('last_gig_id') 
            ? Overview::find(session('last_gig_id')) 
            : null;
    
        // Retrieve the old pricing data from session if it exists
        $pricingData = session('pricing_data', null); // Default to null if no session data
    
        // Pass the data to the 'websites.edit' view
        return view('websites.edit', compact('lastGig', 'pricingData'));
    }
    

    public function store(Request $request)
    {
        try {
            $request->validate([
                'is_us_person' => 'required|boolean',
            ]);

            UsPerson::create([
                'name' => auth()->user() ? auth()->user()->name : 'Guest',
                'is_us_person' => $request->input('is_us_person'),
            ]);

            return redirect()->back()->with('success', 'Details updated successfully.');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }

   
}
