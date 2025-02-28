<?php

use App\Http\Livewire\Cart;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInventoryController;
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

//account page
Route::get('account/overzicht/{id}', [UserController::class, 'show'])->name('profile');

//shop routes
Route::get('/shop', [UserInventoryController::class, 'showItems'])->name('showItems');
Route::get('/check-providers', [UserInventoryController::class, 'testCookie']);


//shopping cart


Route::middleware('auth')->group(function () {
    Route::get('/items/items/{user}', [TradeController::class, 'getUserItems'])->name('getUserItems');
    Route::post('/trades', [TradeController::class, 'createTrade'])->name('create');       // Create a new items
    Route::post('/trades/{items}/accept', [TradeController::class, 'acceptTrade'])->name('accept'); // Accept a items
    Route::post('/trades/{items}/decline', [TradeController::class, 'declineTrade'])->name('decline'); // Decline a items
});

