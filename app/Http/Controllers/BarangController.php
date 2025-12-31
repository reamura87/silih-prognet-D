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
        'nama_peminjam' => 'Mahasiswa',
        'tanggal_pinjam' => now()
    ]);

    // kurangi stok
    $barang->stok -= 1;
    $barang->save();

    return redirect()->back()->with('success', 'Barang berhasil dipinjam!');
}

}
