<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/login', function () {
    return view('login');
});
Route::post("/signin", [UserController::class, "login"])->name("signin");
Route::post("/login", [UserController::class, "logout"])->name("logout");

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/join', function() {
    return view('signup');
});
Route::post("/register", [UserController::class, "register"])->name("register");

