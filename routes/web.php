<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
    

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 route::get('/redirect',[HomeController::class,'redirect']);
//admin side
 route::get('/view_catagory',[AdminController::class,'view_catagory']);

 route::get('/page_catagory',[AdminController::class,'page_catagory']);

 route::get('/page_product',[AdminController::class,'page_product']);

 route::post('/add_catagory',[AdminController::class,'add_catagory']);

 route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);

 route::get('/view_product',[AdminController::class,'view_product']);

 route::post('/add_product',[AdminController::class,'add_product']);

 route::get('/show_product',[AdminController::class,'show_product']);

 route::post('/test',[AdminController::class,'test']);

 route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

 route::get('/edit_product/{id}',[AdminController::class,'edit_product']);

 route::get('/edit_catagory/{id}',[AdminController::class,'edit_catagory']);

 route::post('/update_product/{id}',[AdminController::class,'update_product']);

 route::post('/update_catagory/{id}',[AdminController::class,'update_catagory']);

 route::get('/order',[AdminController::class,'order']);

 route::get('/delivered/{id}',[AdminController::class,'delivered']);

 //user side

 route::get('/link',[HomeController::class,'link']);

 route::get('/latest',[HomeController::class,'latest']);

 route::get('/index',[HomeController::class,'index']);

 route::get('/contact',[HomeController::class,'contact']);

 route::get('/about',[HomeController::class,'about']);

 route::get('/product_detail/{id}',[HomeController::class,'product_detail']);

//add_product to cart


route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

route::get('/show_cart',[HomeController::class,'show_cart']);

route::get('/delete_cart/{id}',[HomeController::class,'delete_cart']);

//order
route::get('/cash_order',[HomeController::class,'cash_order']);

//teamir work's
route::get('/show_order',[HomeController::class,'show_order']);

route::get('/delete_order/{id}',[HomeController::class,'delete_order']);

// chapaid

// The route that the button calls to initialize payment

Route::post('pay', 'App\Http\Controllers\ChapaController@initialize')->name('pay');

// The callback u+rl after a payment
Route::get('callback/{reference}', 'App\Http\Controllers\ChapaController@callback')->name('callback');