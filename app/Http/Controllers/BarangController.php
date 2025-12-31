<?php

namespace App\Http\Controllers;

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

        // validasi stok
        if ($barang->stok <= 0) {
            return redirect()->back()->with('error', 'Stok barang habis!');
        }

        // kurangi stok
        $barang->stok -= 1;
        $barang->save();

        return redirect()->back()->with('success', 'Barang berhasil dipinjam!');
    }
}
