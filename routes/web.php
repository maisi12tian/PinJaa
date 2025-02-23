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

//mahasiswa

Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/peminjaman', function () {
        $barang = Barang::whereNotIn('id', function ($query) {
            $query->select('barang_id')->from('peminjaman')->where('status', '!=', 'selesai');
        })->get();
        return view('mahasiswa.peminjaman', compact('barang'));
    });

    Route::post('/peminjaman', function (Request $request) {
        $request->validate([
            'barang_id' => 'required|exists:barang,id',
        ]);
        
        $peminjaman = Peminjaman::create([
            'user_id' => Auth::id(),
            'barang_id' => $request->barang_id,
            'tanggal_peminjaman' => now(),
            'status' => 'menunggu',
        ]);
        return redirect('/peminjaman')->with('success', 'Peminjaman berhasil diajukan');
    });

    Route::get('/histori', function () {
        $histori = Peminjaman::where('user_id', Auth::id())->orderBy('tanggal_peminjaman', 'desc')->get();
        return view('mahasiswa.histori', compact('histori'));
    });
});

//admin

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/verifikasi', function () {
        $peminjaman = Peminjaman::where('status', 'menunggu')->orderBy('tanggal_peminjaman', 'asc')->get();
        return view('admin.verifikasi', compact('peminjaman'));
    });

    Route::post('/verifikasi/{id}/setujui', function ($id) {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update(['status' => 'disetujui']);

        VerifikasiPeminjaman::create([
            'peminjaman_id' => $peminjaman->id,
            'admin_id' => Auth::id(),
            'status' => 'disetujui',
        ]);
        return redirect('/verifikasi')->with('success', 'Peminjaman disetujui');
    });

    Route::post('/verifikasi/{id}/selesai', function ($id) {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update(['status' => 'selesai', 'tanggal_pengembalian' => now()]);
        return redirect('/verifikasi')->with('success', 'Peminjaman selesai');
    });

    Route::get('/histori-admin', function () {
        $histori = Peminjaman::orderBy('tanggal_peminjaman', 'desc')->get();
        return view('admin.histori', compact('histori'));
    });
});

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