<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\DashboardController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/ruangan', [PageController::class, 'ruangan'])->name('ruangan');
Route::post('/barang/{id}/pinjam', [BarangController::class, 'pinjam'])->name('barang.pinjam');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::post('/barang/{id}/pinjam', [BarangController::class, 'pinjam'])->name('barang.pinjam');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('/peminjaman/{id}/kembali', [PeminjamanController::class, 'kembali'])->name('peminjaman.kembali');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
