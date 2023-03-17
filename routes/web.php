<?php

use App\Http\Controllers\CartItemController;
use App\Models\Sections;
use App\Mail\TestMail;
use App\Http\Controllers\ProuductsController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//all sections function
Route::resource('/sections',App\Http\Controllers\SectionsController::class);
//all products function
Route::resource('/products',ProuductsController::class);
//add product to cart
Route::post('/cart/add/{id}', [App\Http\Controllers\ProuductsController::class, 'add'])->name('cart.add');
//research products
Route::get('/product/research', [App\Http\Controllers\ProuductsController::class, 'research'])->name('product.research');
//shop products
Route::get('/product/shop', [App\Http\Controllers\ProuductsController::class, 'shop'])->name('product.shop');


//mile peadge
Route::get('/mile/contactUs', [App\Http\Controllers\ContactMiles::class, 'index'])->name('mile.contactUs');
//send mile
Route::post('contact/submit', [App\Http\Controllers\ContactMiles::class, 'sendEmail'])->name('contact.submit');



//remove item is acart
Route::post('/cart/remove/{id}', [App\Http\Controllers\CartItemController::class, 'destroy'])->name('cart.remove');
//


Route::get('cart/conferm/{id}',[App\Http\Controllers\OrderController::class, 'update'])->name('carte.conferm');



//update qountity
Route::post('/cart/{id}', [App\Http\Controllers\CartItemController::class, 'update'])->name('cart.update');

//Route::put('/cart/{id}', 'CartController@update')->name('cart.update');

Route::resource('/cart',CartItemController::class);



Route::get('/about', function () {
    return view('about');
});

