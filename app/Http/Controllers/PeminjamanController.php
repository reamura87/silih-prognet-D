<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::with('barang')->latest()->get();
        return view('peminjaman.index', compact('peminjamans'));
    }

    public function kembali($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        // tambah stok
        $barang = Barang::findOrFail($peminjaman->barang_id);
        $barang->stok += 1;
        $barang->save();

        // set tanggal_kembali
        $peminjaman->status = 'Dikembalikan';
        $peminjaman->tanggal_kembali = now();
        $peminjaman->save();

        $peminjaman->update([
            'status' => 'Dikembalikan',
            'tanggal_kembali' => now()
        ]);

        return redirect()->back()->with('success', 'Barang berhasil dikembalikan');
    }
}
