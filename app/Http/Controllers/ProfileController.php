<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function pay() {
        return view('payment');
    }
}
