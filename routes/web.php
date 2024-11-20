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

Route::get('/edit', function () {
    return view('edit');
})->name('edit');


Route::get('/', [FiveerController::class, 'index'])->name('admin.dashboard');
Route::get('/websites', [FiveerController::class, 'showall'])->name('websites.index');
Route::get('/inspired', [FiveerController::class, 'inspired'])->name('websites.inspired');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/selling', [SellerController::class, 'index'])->name('selling');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/edit', [EditController::class, 'index'])->name('edit');


 Route::get('/order', function () {
   
     return view('order');
 });