<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
// Route::view(Portfolio, Portfolio);
Route::get('/', function () {
    return view('Portfolio');
});
Route::get('/register', [Authcontroller::class, 'showRegister'])->name('register.form');
Route::post('/register', [Authcontroller::class, 'Register'])->name('register');

Route::get('/login', [Authcontroller::class, 'showLogin'])->name('login.form');
Route::post('/login', [Authcontroller::class, 'performLogin'])->name('login');

Route::post('/logout', function(){

});
=======
use App\http\Controllers\AuthController;
use App\Http\Controllers\mainController;

route::get('/', [mainController::class, 'index']);

Route::get('/register',[AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register',[AuthController::class, 'Register'])->name('register');



Route::get('/login',[AuthController::class, 'showlogin'])->name('login.form');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::get('logout', function(){

});


>>>>>>> 0fc10bda9988c99dfee222f1197b8678e1dbed18
