<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PageController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (login, register, logout)
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| GUEST (BELUM LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| AUTHENTICATED USERS
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Home setelah login
    Route::get('/home', [PageController::class, 'home'])->name('home');

    // Umum
    Route::get('/barang', [BarangController::class, 'index'])->name('barang');
    Route::post('/barang/{id}/pinjam', [BarangController::class, 'pinjam'])->name('barang.pinjam');

    Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
    Route::post('/peminjaman/{id}/kembali', [PeminjamanController::class, 'kembali'])->name('peminjaman.kembali');

    Route::get('/ruangan', [PageController::class, 'ruangan'])->name('ruangan');
});

/*
|--------------------------------------------------------------------------
| ADMIN ONLY
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
