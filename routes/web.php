<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\ClientController::class, 'wel']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/page', [App\Http\Controllers\PageController::class, 'index'])->name('page');
Route::get('/team', [App\Http\Controllers\TeamController::class, 'index'])->name('team');


Route::get('dashb',[App\Http\Controllers\TeamController::class,'dashb']);
Route::get('dash',[App\Http\Controllers\geust\DashController::class,'index']);
Route::get('product',[App\Http\Controllers\geust\ProductController::class,'index']);
Route::get('product/sell',[App\Http\Controllers\geust\ProductController::class,'Sell']);
Route::post('product',[App\Http\Controllers\geust\ProductController::class,'sel']);
Route::get('search', [App\Http\Controllers\geust\ProductController::class, 'search'])->name('search');
Route::get('listm',[App\Http\Controllers\geust\ListController::class,'index']);
Route::get('addcart/{id}', [App\Http\Controllers\geust\ProductController::class, 'addcart'])->name('addcart');
Route::get('cart', [App\Http\Controllers\geust\ProductController::class, 'cart']);
Route::post('pay', [App\Http\Controllers\geust\PaymentController::class, 'pay']);
Route::get('success', [App\Http\Controllers\geust\PaymentController::class, 'success']);
Route::get('error', [App\Http\Controllers\geust\PaymentController::class, 'error']);
Route::get('addvehicule',[App\Http\Controllers\geust\AddVehiculeController::class,'index']);
Route::get('doni',[App\Http\Controllers\geust\DonController::class,'doni']);
Route::get('map',[App\Http\Controllers\geust\MapController::class,'index']);
Route::get('don',[App\Http\Controllers\geust\DonController::class,'don']);
Route::post('dons',[App\Http\Controllers\geust\DonController::class,'dons']);
Route::get('google', [App\Http\Controllers\geust\LocationController::class, 'google']);
Route::post('gen', [App\Http\Controllers\geust\LocationController::class, 'gen']);
Route::get('tandif', [App\Http\Controllers\geust\TandifController::class, 'tandif']);
Route::get('omal', [App\Http\Controllers\geust\TandifController::class, 'omal']);
Route::get('one', [App\Http\Controllers\geust\TandifController::class, 'one']);

  

 

Auth::routes();




Route::prefix('admin')->middleware(['auth','isAdmin']) ->group(function() {
    Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);
    Route::get('categories/add',[App\Http\Controllers\Admin\CategoriesController::class,'categories']);
    Route::get('categories/create',[App\Http\Controllers\Admin\CategoriesController::class,'create']);
    Route::post('categories/add',[App\Http\Controllers\Admin\CategoriesController::class,'store']);
    Route::get('adduser',[App\Http\Controllers\Admin\AddUserController::class,'index']);
    Route::post('addusers',[App\Http\Controllers\Admin\AddUserController::class,'users']);
    Route::get('addtransporter',[App\Http\Controllers\Admin\TransporterController::class,'index']);
    Route::post('addtransporters',[App\Http\Controllers\Admin\TransporterController::class,'transporters']);
    Route::get('dash',[App\Http\Controllers\User\DashController::class,'index']);
    Route::get('loc',[App\Http\Controllers\Admin\AddUserController::class,'loc']);
    Route::get('leddon',[App\Http\Controllers\Admin\AddUserController::class,'led']);
    Route::get('deletee/{id}',[App\Http\Controllers\Admin\AddUserController::class,'deletee']);
    Route::get('delete/{id}',[App\Http\Controllers\Admin\AddUserController::class,'delete']);
    
    Route::get('deleteee/{id}',[App\Http\Controllers\Admin\AddUserController::class,'deleteee']);

  
    Route::get('product',[App\Http\Controllers\Admin\AddUserController::class,'pro']);
 
   
   

});
Route::prefix('user')->middleware(['auth','isUser']) ->group(function() {
    Route::get('dash',[App\Http\Controllers\User\DashController::class,'index']);
    Route::get('product',[App\Http\Controllers\User\ProductController::class,'index']);
    Route::get('product/sell',[App\Http\Controllers\User\ProductController::class,'Sell']);
    Route::post('product',[App\Http\Controllers\User\ProductController::class,'sel']);
    Route::get('search', [App\Http\Controllers\User\ProductController::class, 'search'])->name('search');
    Route::get('list',[App\Http\Controllers\User\ListController::class,'index']);
    Route::get('addcart/{id}', [App\Http\Controllers\User\ProductController::class, 'addcart'])->name('addcart');
    Route::get('cart', [App\Http\Controllers\User\ProductController::class, 'cart']);
    Route::post('pay', [App\Http\Controllers\User\PaymentController::class, 'pay']);
    Route::get('success', [App\Http\Controllers\User\PaymentController::class, 'success']);
    Route::get('error', [App\Http\Controllers\User\PaymentController::class, 'error']);
    Route::get('addvehicule',[App\Http\Controllers\User\AddVehiculeController::class,'index']);
    Route::get('doni',[App\Http\Controllers\User\DonController::class,'doni']);
    Route::get('map',[App\Http\Controllers\User\MapController::class,'index']);
    Route::get('don',[App\Http\Controllers\User\DonController::class,'don']);
    Route::post('dons',[App\Http\Controllers\User\DonController::class,'dons']);
    Route::get('google', [App\Http\Controllers\User\LocationController::class, 'google']);
    Route::post('gen', [App\Http\Controllers\User\LocationController::class, 'gen']);
    Route::get('tandif', [App\Http\Controllers\User\TandifController::class, 'tandif']);
    Route::get('omal', [App\Http\Controllers\User\TandifController::class, 'omal']);
  



 
  


   
});

Route::prefix('transporter')->middleware(['auth','isTransporter']) ->group(function() {
    Route::get('dasha',[App\Http\Controllers\Transporter\DashaController::class,'index']);
    Route::get('addvehicule',[App\Http\Controllers\Transporter\AddVehiculeController::class,'index']);
    Route::get('adds',[App\Http\Controllers\Transporter\AddVehiculeController::class,'adds']);
    Route::post('addvehicule',[App\Http\Controllers\Transporter\AddVehiculeController::class,'addss']);
    Route::get('delete/{id}',[App\Http\Controllers\Transporter\AddVehiculeController::class,'delete']);
 
});

