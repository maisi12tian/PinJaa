<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('register');
});

use App\Http\Controllers\LoginController;

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/register', [RegisterController::class, 'store']);
