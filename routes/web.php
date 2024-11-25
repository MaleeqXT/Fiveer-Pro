<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiveerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\AdminController;



// Route::get('/', function () {
   
//     return view('welcome');
// });

// routes/web.php

Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('dashboard.admin');

Route::get('/', [FiveerController::class, 'index']);
Route::get('/websites', [FiveerController::class, 'showall'])->name('websites.index');
Route::get('/inspired', [FiveerController::class, 'inspired'])->name('websites.inspired');
Route::get('/breifs', [FiveerController::class, 'breifs'])->name('messages.breifs');
Route::get('/earning', [FiveerController::class, 'earning'])->name('websites.earning');
Route::get('/contact', [FiveerController::class, 'contact'])->name('messages.contact');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/selling', [SellerController::class, 'index'])->name('selling');
Route::get('/analytics', [SellerController::class, 'analytics'])->name('analytics.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('websites.profile');
Route::get('/payment', [ProfileController::class, 'pay'])->name('messages.payment');
Route::get('/edit', [EditController::class, 'index'])->name('websites.edit');
Route::post('/questions', [EditController::class, 'store'])->name('questions.store');

Route::get('/program', function () {
    return view('messages.program');
   })->name('messages.program');

Route::get('/inbox', function () {
    return view('messages.inbox');
   })->name('messages.inbox');


 Route::get('/order', function () {
     return view('messages.order');
    })->name('messages.order');

    Route::get('/list', function () {
   
        return view('messages.list');
       })->name('messages.list');

       Route::get('/complete', function () {
   
        return view('websites.complete');
       })->name('websites.complete');

 Route::get('/overview', function () {
   
     return view('overview');
 });

  Route::get('/setting', function () {
   
     return view('setting');
 });
