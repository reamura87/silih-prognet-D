<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;

class PeminjamanController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            $peminjamans = Peminjaman::with(['barang', 'user'])
                ->latest()
                ->get();
        } else {
            $peminjamans = Peminjaman::with('barang')
                ->where('user_id', auth()->id())
                ->latest()
                ->get();
    }
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function kembali($id)
{
    $peminjaman = Peminjaman::with('barang')->findOrFail($id);

    if ($peminjaman->status === 'Dikembalikan') {
        return back();
    }

    // tambah stok barang
    $peminjaman->barang->increment('stok');

    // update peminjaman
    $peminjaman->update([
        'status' => 'Dikembalikan',
        'tanggal_kembali' => now()
    ]);

    return back()->with('success', 'Barang berhasil dikembalikan');
}
}
