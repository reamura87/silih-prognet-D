<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function pinjam($id)
{
    $barang = Barang::findOrFail($id);

    if ($barang->stok <= 0) {
        return redirect()->back()->with('error', 'Stok barang habis!');
    }

    // simpan riwayat peminjaman
    Peminjaman::create([
        'barang_id' => $barang->id,
        'user_id' => auth()->id(),
        'nama_peminjam' => auth()->user()->name,
        'tanggal_pinjam' => now(),
        'status' => 'Dipinjam'
    ]);

    // kurangi stok
    $barang->decrement('stok');

    return back()->with('success', 'Barang berhasil dipinjam!');
}

}
