<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiveerController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [FiveerController::class, 'index'])->name('admin.dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
