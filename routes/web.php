<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BarangController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/ruangan', [PageController::class, 'ruangan'])->name('ruangan');
Route::post('/barang/{id}/pinjam', [BarangController::class, 'pinjam'])->name('barang.pinjam');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::post('/barang/{id}/pinjam', [BarangController::class, 'pinjam'])->name('barang.pinjam');