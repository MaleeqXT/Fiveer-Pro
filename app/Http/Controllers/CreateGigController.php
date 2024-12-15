<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateGigController extends Controller
{
    //
    public function index(){
        return view('gigs.create');
    }
}
