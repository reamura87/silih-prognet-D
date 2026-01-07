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

public function create()
{
    return view('barang.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama'   => 'required|string|max:255',
        'stok'   => 'required|integer|min:0',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $namaGambar = null;

    if ($request->hasFile('gambar')) {
        $namaGambar = time() . '_' . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('img/barang'), $namaGambar);
    }

    Barang::create([
        'nama'   => $request->nama,
        'stok'   => $request->stok,
        'gambar' => $namaGambar
    ]);

    return redirect()->route('barang.index')
        ->with('success', 'Barang berhasil ditambahkan');
}

    public function edit($id)
{
    $barang = Barang::findOrFail($id);
    return view('barang.edit', compact('barang'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama'   => 'required|string|max:255',
        'stok'   => 'required|integer|min:0',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ]);

    $barang = Barang::findOrFail($id);

    // handle gambar baru
    if ($request->hasFile('gambar')) {

        // hapus gambar lama
        if ($barang->gambar && file_exists(public_path('img/barang/' . $barang->gambar))) {
            unlink(public_path('img/barang/' . $barang->gambar));
        }

        $namaGambar = time() . '_' . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('img/barang'), $namaGambar);
        $barang->gambar = $namaGambar;
    }

    $barang->update([
        'nama' => $request->nama,
        'stok' => $request->stok,
    ]);

    return redirect()->route('barang.index')
        ->with('success', 'Barang berhasil diupdate');
}

    public function destroy($id)
{
    $barang = Barang::findOrFail($id);

    // hapus gambar jika ada
    if ($barang->gambar && file_exists(public_path('img/barang/' . $barang->gambar))) {
        unlink(public_path('img/barang/' . $barang->gambar));
    }

    $barang->delete();

    return redirect()->route('barang.index')
        ->with('success', 'Barang berhasil dihapus');
}


}
