<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInventoryController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [UserInventoryController::class, 'search'])->name('search');
Route::get('/search/predictive', [UserInventoryController::class, 'predictiveSearch'])->name('search.predictive');
Route::get('/faq', function () {
    return view('templates.faq');
})->name('faq');

//login functions
Route::get('/login', function () {return view('registering.login');})->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', function() {return view('registering.register');})->name('register');
Route::post('/register', [RegisterController::class, 'authenticate']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

//shop routes
Route::get('/shop', [UserInventoryController::class, 'showItems'])->name('showItems');
Route::get('/check-providers', [UserInventoryController::class, 'testCookie']);


//shopping cart
Route::get('cart', [CartController::class, 'cart'])->name('cart');

Route::prefix('cart')->group(function () {
    Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::patch('update-cart', [CartController::class, 'update'])->name('updateCart');
    Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('removeFromCart');
});



Route::middleware([Authenticate::class, 'auth'])->group(function () {
    Route::prefix('lists')->group(function () {
        Route::get('add-to-list/{id}', [ListController::class, 'addToList'])->name('addToList');
        Route::get('overview-lists', [ListController::class, 'showLists'])->name('showLists');
        Route::get('wishlist', [ListController::class, 'showWishlist'])->name('showWishlist');
        Route::delete('remove-from-list', [ListController::class, 'remove'])->name('removeFromList');
    });


    Route::get('/items/items/{user}', [TradeController::class, 'getUserItems'])->name('getUserItems');
    Route::post('/trades', [TradeController::class, 'createTrade'])->name('create');       // Create a new items
    Route::post('/trades/{items}/accept', [TradeController::class, 'acceptTrade'])->name('accept'); // Accept a items
    Route::post('/trades/{items}/decline', [TradeController::class, 'declineTrade'])->name('decline'); // Decline a items

    //account page
    Route::get('account/overzicht/{id}', [UserController::class, 'show'])->name('profile');
});

