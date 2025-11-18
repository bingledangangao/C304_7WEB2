<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\Http\Controllers\mainController;

route::get('/', [mainController::class, 'index']);

Route::get('/register',[AuthController::class, 'showRegister'])->name('register.form');
Route::get('/register',[AuthController::class, 'performRegister'])->name('register');



Route::get('/login',[AuthController::class, 'showlogin'])->name('login.form');
Route::get('/login',[AuthController::class, 'performlogin'])->name('login');

Route::get('logout', function(){

});


