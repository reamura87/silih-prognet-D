<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Barang;

class PeminjamanController extends Controller
{
    // =========================
    // USER & ADMIN VIEW
    // =========================
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            // admin lihat SEMUA peminjaman
            $peminjamans = Peminjaman::with(['barang', 'user'])
                ->latest()
                ->get();
        } else {
            // user hanya lihat peminjaman sendiri
            $peminjamans = Peminjaman::with('barang')
                ->where('user_id', auth()->id())
                ->latest()
                ->get();
        }

        return view('peminjaman.index', compact('peminjamans'));
    }

    // =========================
    // ADMIN - LIHAT PENDING
    // =========================
    public function pending()
    {
        $peminjamans = Peminjaman::with(['barang', 'user'])
            ->where('status', 'Pending')
            ->latest()
            ->get();

        return view('admin.peminjaman.pending', compact('peminjamans'));
    }

    // =========================
    // ADMIN - ACC PEMINJAMAN
    // =========================
    public function acc($id)
    {
        $peminjaman = Peminjaman::with('barang')->findOrFail($id);

        if ($peminjaman->status !== 'Pending') {
            return back();
        }

        // kurangi stok
        $peminjaman->barang->decrement('stok');

        // update status
        $peminjaman->update([
            'status' => 'Dipinjam'
        ]);

        return back()->with('success', 'Peminjaman disetujui');
    }

    // =========================
    // ADMIN - TOLAK PEMINJAMAN
    // =========================
    public function tolak($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        if ($peminjaman->status !== 'Pending') {
            return back();
        }

        $peminjaman->update([
            'status' => 'Ditolak'
        ]);

        return back()->with('success', 'Peminjaman ditolak');
    }

    // =========================
    // USER - KEMBALIKAN BARANG
    // =========================
    public function kembali($id)
    {
        $peminjaman = Peminjaman::with('barang')->findOrFail($id);

        // ❗ hanya bisa dikembalikan jika sudah Dipinjam
        if ($peminjaman->status !== 'Dipinjam') {
            return back()->with('error', 'Barang belum disetujui admin');
        }

        // tambah stok
        $peminjaman->barang->increment('stok');

        // update status
        $peminjaman->update([
            'status' => 'Dikembalikan',
            'tanggal_kembali' => now()
        ]);

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil dikembalikan');
    }
}
