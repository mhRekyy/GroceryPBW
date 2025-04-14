<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

// Auth Routes
Route::get('/', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

// Home & Shop
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

// Cart
Route::get('/cart', function () {
    return view('pages.cart');
})->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

// Featured Products
Route::get('/featured-products', [ProductController::class, 'featured'])->name('featured.products');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
