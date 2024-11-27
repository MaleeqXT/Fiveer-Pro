<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seller;


class SellerController extends Controller
{
    public function index() {
        return view('selling');
    }

    public function analytics(){

        return view('analytics.index');
    }

    public function profile() {
        return view('websites.profile');
    }

    public function pay() {
        return view('messages.payment');
    }

    public function gig() {
        return view('websites.gig');
    }
}
