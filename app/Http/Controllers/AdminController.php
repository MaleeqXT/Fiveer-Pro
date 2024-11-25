<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin(){
return view('dashboard.admin');
    }

       public function create(){
           return view('exploring.create');
            }

        public function show(){
            return view('exploring.show');
            }

}
