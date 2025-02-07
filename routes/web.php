<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('registering.login');
})->name('login');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/', [HomeController::class, 'index']);
Route::get('/search', [UserInventoryController::class, 'search'])->name('search');
Route::get('/search/predictive', [UserInventoryController::class, 'predictiveSearch'])->name('search.predictive');
Route::get('/faq', function () {
    return view('templates.faq');
})->name('faq');

//login functions
Route::post('/register', [RegisterController::class, 'authenticate']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');

//account page
Route::get('users/{id}', [UserController::class, 'show'])->name('profile');

//trading routes
Route::get('/csgo/trade', [TradeController::class, 'showTrade'])->name('showTrade');

Route::middleware('auth')->group(function () {
    Route::get('/trade/items/{user}', [TradeController::class, 'getUserItems'])->name('getUserItems');
    Route::post('/trades', [TradeController::class, 'createTrade'])->name('create');       // Create a new trade
    Route::post('/trades/{trade}/accept', [TradeController::class, 'acceptTrade'])->name('accept'); // Accept a trade
    Route::post('/trades/{trade}/decline', [TradeController::class, 'declineTrade'])->name('decline'); // Decline a trade
});

