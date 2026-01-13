<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;

class PeminjamanController extends Controller
{
    // menampilkan daftar peminjaman
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

    // mengembalikan barang
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
        'status_pengembalian' => 'Dikembalikan',
        'tanggal_kembali' => now()
    ]);

    // untuk view jika barang berhasil dikembalikan
    return redirect()->route('barang.index')->with('success', 'Barang berhasil dikembalikan');
}
}
