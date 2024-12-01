<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiveerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\AdminController;



Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('dashboard.admin');
Route::get('/create', [AdminController::class, 'create'])->name('exploring.create');
Route::get('/show', [AdminController::class, 'show'])->name('exploring.show');

Route::get('/', [FiveerController::class, 'index']);
Route::get('/helps', [FiveerController::class, 'help'])->name('supports.help');
Route::get('/websites', [FiveerController::class, 'showall'])->name('websites.index');
Route::get('/inspired', [FiveerController::class, 'inspired'])->name('websites.inspired');
Route::get('/breifs', [FiveerController::class, 'breifs'])->name('messages.breifs');
Route::get('/earning', [FiveerController::class, 'earning'])->name('websites.earning');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/selling', [SellerController::class, 'index'])->name('selling');
Route::get('/analytics', [SellerController::class, 'analytics'])->name('sellers.index');
Route::get('/profile', [SellerController::class, 'profile'])->name('websites.profile');
Route::get('/gig', [SellerController::class, 'gig'])->name('sellers.gig');
Route::get('/seller/plus', [SellerController::class, 'plus'])->name('sellers.plus');
Route::get('/payment', [SellerController::class, 'pay'])->name('messages.payment');
Route::get('/contact', [SellerController::class, 'contact'])->name('sellers.contact');
Route::get('/edit', [EditController::class, 'index'])->name('websites.edit');
Route::post('/questions', [EditController::class, 'store'])->name('questions.store');


Route::get('/program', function () {
    return view('sellers.program');
   })->name('sellers.program');

Route::get('/inbox', function () {
    return view('messages.inbox');
   })->name('messages.inbox');

 Route::get('/order', function () {
     return view('sellers.order');
    })->name('sellers.order');

    Route::get('/list', function () {
   
        return view('messages.list');
       })->name('messages.list');

       Route::get('/complete', function () {
   
        return view('websites.complete');
       })->name('websites.complete');

 Route::get('/overview', function () {
   
     return view('sellers.overview');
 })->name('sellers.overview');

  Route::get('/setting', function () {
   
     return view('websites.setting');
 })->name('websites.setting');

 Route::get('/refer', function () {
   
    return view('websites.refer');
})->name('websites.refer');

 
 Route::get('/fiverl', function () {
   
     return view('fiverlearn');
 });

 Route::get('/refer', function () {
   
    return view('websites.refer');
})->name('websites.refer');
