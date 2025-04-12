<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
Route::get('/featured-products', [ProductController::class, 'featured'])->name('featured.products');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart.index');

Route::get('/register', function () {
    return view('components.register');
});
Route::get('/login', function () {
    return view('components.login');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

//Contacts
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

