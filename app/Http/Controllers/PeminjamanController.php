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

        if (!$peminjaman->tanggal_kembali) {
            return back()->with('error', 'Barang Sudah Dikembalikan');
        }
        // tambah stok
        $barang = $peminjaman->barang;
        $barang->stok += 1;
        $barang->save();
        // set tanggal_kembali
        $peminjaman->tanggal_kembali = now();
        $peminjaman->save();

        // hapus data peminjaman
        $peminjaman->delete();

        return redirect()->back()->with('success', 'Barang berhasil dikembalikan');
    }
}
