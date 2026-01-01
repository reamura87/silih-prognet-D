<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalStok = Barang::sum('stok');
        $dipinjam = Peminjaman::where('status','Dipinjam')->count();
        $totalPeminjaman = Peminjaman::count();

        return view('dashboard', compact(
            'totalBarang',
            'totalStok',
            'dipinjam',
            'totalPeminjaman'
        ));
    }
}
