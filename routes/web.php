<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiveerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditController;




// Route::get('/', function () {
   
//     return view('welcome');
// });

// routes/web.php


Route::get('/', [FiveerController::class, 'index']);
Route::get('/websites', [FiveerController::class, 'showall'])->name('websites.index');
Route::get('/inspired', [FiveerController::class, 'inspired'])->name('websites.inspired');
Route::get('/breifs', [FiveerController::class, 'breifs'])->name('websites.breifs');
Route::get('/earning', [FiveerController::class, 'earning'])->name('websites.earning');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/selling', [SellerController::class, 'index'])->name('selling');
Route::get('/profile', [ProfileController::class, 'index'])->name('websites.profile');
Route::get('/payment', [ProfileController::class, 'pay'])->name('websites.payment');
Route::get('/edit', [EditController::class, 'index'])->name('websites.edit');


 Route::get('/order', function () {
   
     return view('websites.order');
    })->name('websites.order');


    Route::get('/list', function () {
   
        return view('websites.list');
       })->name('websites.list');

       Route::get('/complete', function () {
   
        return view('websites.complete');
       })->name('websites.complete');


       Route::get('/overview', function () {
   
        return view('overview');
    });