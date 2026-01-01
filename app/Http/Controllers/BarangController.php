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
    if (Peminjaman::where('barang_id',$id)
    ->where('status','Dipinjam')->exists()) {
    return back()->with('error','Barang sedang dipinjam');
}
    $barang = Barang::findOrFail($id);

    if ($barang->stok <= 0) {
        return redirect()->back()->with('error', 'Stok barang habis!');
    }

    // simpan riwayat peminjaman
    Peminjaman::create([
        'barang_id' => $barang->id,
        'nama_peminjam' => 'Mahasiswa',
        'tanggal_pinjam' => now(),
        'status' => 'dipinjam'
    ]);

    // kurangi stok
    $barang->stok -= 1;
    $barang->save();

    return redirect()->back()->with('success', 'Barang berhasil dipinjam!');
}

}
