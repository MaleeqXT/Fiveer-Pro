<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiveerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;




Route::get('/', function () {
   
    return view('welcome');
});

Route::get('/fiverr/buying', [FiveerController::class, 'index'])->name('admin.dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/selling', [SellerController::class, 'index'])->name('selling');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');