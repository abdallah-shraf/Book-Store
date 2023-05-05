<?php

use App\Http\Controllers\CartItemController;
use App\Models\Sections;
use App\Mail\TestMail;
use App\Http\Controllers\ProuductsController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//user
Route::get('/user/order/{id}', [App\Http\Controllers\OrderController::class, 'user'])->name('user.order');


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


Route::get('/ma', function () {
    Mail::to('abdallahashraf743@gmail.com')->send(new TestMail());
    return "Done Send Mailing";
});
