<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FiveerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MyListController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ActiveController;
use App\Http\Controllers\BusinessDetailsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SecuritySettingController;
use App\Http\Controllers\ItemlistController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\BillingInformationController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\GigMediaController;


// Route::get('/', function () {
   
//     return view('welcome');
// });

// routes/web.php

Route::get('/', [FiveerController::class, 'index'])->name('buying');
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
Route::get('seller/profile', [SellerController::class, 'proshow'])->name('sellers.profile');
Route::get('/gig', [SellerController::class, 'gig'])->name('sellers.gig');
Route::get('/seller/plus', [SellerController::class, 'plus'])->name('sellers.plus');
Route::get('/payment', [SellerController::class, 'pay'])->name('messages.payment');
Route::get('/contact', [SellerController::class, 'contact'])->name('sellers.contact');
 



Route::get('/edit', [FiveerController::class, 'indexs'])->name('websites.edit');


Route::post('/actives', [ActiveController::class, 'store'])->name('actives.store');
Route::post('/account', [AccountController::class, 'store'])->name('account.store');
Route::post('/types', [AccountController::class, 'store'])->name('types.store');
Route::post('/us-person', [AccountController::class, 'store'])->name('us_person.store');





Route::get('/payment', [PaymentController::class, 'pay'])->name('messages.payment');
Route::post('/store-payment', [PaymentController::class, 'store'])->name('payment.store');
Route::post('/billing/store', [BillingInformationController::class, 'store'])->name('billing.store');






Route::post('/websites/complete/store', [BusinessDetailsController::class, 'store'])->name('websites.complete.store');

Route::get('/complete', function () {
   
    return view('websites.complete');
   })->name('websites.complete');



Route::get('/program', function () {
    return view('sellers.program');
   })->name('sellers.program');


Route::get('/inbox', function () {
    return view('messages.inbox');
   })->name('messages.inbox');

 Route::get('/order', function () {
     return view('sellers.order');
    })->name('sellers.order');



     

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

 



Route::post('/profile', [UserProfileController::class, 'store'])->name('profile.store');

Route::post('/active/store', [ActiveController::class, 'store'])->name('active.store');


Route::get('/setting', [SecuritySettingController::class, 'index'])->name('websites.setting');

Route::post('/security', [SecuritySettingController::class, 'store'])->name('security.store');

Route::get('/list', [ItemlistController::class, 'index'])->name('messages.list');
Route::post('/itemlists', [ItemlistController::class, 'store'])->name('itemlists.store');


Route::post('/finance/store', [FinanceController::class, 'store'])->name('finance.store');

Route::post('/buyers/store', [BuyerController::class, 'store'])->name('buyers.store');



Route::post('/gigs', [GigController::class, 'store'])->name('gigs.store');
Route::post('/save-packages', [PackageController::class, 'store'])->name('packages.store');
Route::post('/save-description', [DescriptionController::class, 'store'])->name('description.store');
Route::post('/gig/media/store', [GigMediaController::class, 'store'])->name('gig.media.store');

