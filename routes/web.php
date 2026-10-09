<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;


// Define the route for the home page
use App\Models\Product;

Route::get('/', function () {
    $skincareProducts = Product::where('category', 'skincare')
        ->where('is_active', true)
        ->get();

    return view('home', compact('skincareProducts'));
});

Route::get('/cart', [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/cart/add/{product}', [CartController::class, 'add'])
    ->name('cart.add');

Route::delete('/cart/remove/{cartItem}', [CartController::class, 'remove'])
    ->name('cart.remove');

Route::patch('/cart/update/{cartItem}', [CartController::class, 'update'])
    ->name('cart.update');

Route::get('/wishlist', [WishlistController::class, 'index'])
    ->name('wishlist.index');

Route::post('/wishlist/toggle/{product}', [WishlistController::class, 'toggle'])
    ->name('wishlist.toggle');

Route::get('/', [ProductController::class, 'home']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/search', [ProductController::class, 'search'])
    ->name('products.search');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.store');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])
    ->name('register.store');

Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout.index');

Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])
    ->name('checkout.place');


Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/')
        ->with('success', 'You have been logged out successfully.');
})->name('logout');