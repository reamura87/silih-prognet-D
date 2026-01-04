<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PageController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| GUEST
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('login');
})->name('root');

/*
|--------------------------------------------------------------------------
| AUTHENTICATED USERS
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Home
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    // Barang
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::post('/barang/{id}/pinjam', [BarangController::class, 'pinjam'])->name('barang.pinjam');

    // Peminjaman
    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::post('/peminjaman/{id}/kembali', [PeminjamanController::class, 'kembali'])->name('peminjaman.kembali');

    // Ruangan
    Route::get('/ruangan', [PageController::class, 'ruangan'])->name('ruangan');

    // Kontak
    Route::get('/kontak', [PageController::class, 'kontak'])->name ('kontak');

    // Profile
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
});

/*
|--------------------------------------------------------------------------
| ADMIN ONLY
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
