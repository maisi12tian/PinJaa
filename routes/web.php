<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\VerifikasiPeminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function () {
    return view('register');
});

Route::get('dashboard', function () {
    return view('mahasiswa.dashboard');
});
Route::get('daftarbarang', function () {
    return view('mahasiswa.daftarbarang');
});

Route::get('laporanbarang', function () {
    return view('mahasiswa.laporanbarang');
});
Route::get('inputbarang', function () {
    return view('admin.inputbarang');
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

Route::get('/peminjaman', function () {
    return view('mahasiswa.peminjaman');
})->name('mahasiswa.peminjaman');

//input barang

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/barang', [BarangController::class, 'index']);
    Route::post('/barang', [BarangController::class, 'store']);
    Route::post('/barang/{id}/update', [BarangController::class, 'update']);
    Route::delete('/barang/{id}/delete', [BarangController::class, 'destroy']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/barang', function () {
        $barang = Barang::all();
        return view('admin.barang', compact('barang'));
    });
});


Route::get('/barang', [BarangController::class, 'index'])->middleware('auth');

Route::resource("/barang", BarangController::class);