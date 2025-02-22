<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('register');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('daftar-barang', function () {
    return view('daftar-barang');
});

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.submit');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/mahasiswa/dashboard', function () {
    return view('mahasiswa.dashboard');
})->name('mahasiswa.dashboard');
