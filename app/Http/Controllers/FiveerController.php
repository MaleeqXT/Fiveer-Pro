<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

   
}
