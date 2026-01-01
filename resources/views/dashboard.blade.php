@extends('layouts.app')

@section('content')
<h2>Dashboard</h2>

<div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:20px;">

    <div style="padding:20px; background:#f1f1f1; border-radius:8px;">
        <h3>Total Barang</h3>
        <p style="font-size:24px;">{{ $totalBarang }}</p>
    </div>

    <div style="padding:20px; background:#f1f1f1; border-radius:8px;">
        <h3>Total Stok</h3>
        <p style="font-size:24px;">{{ $totalStok }}</p>
    </div>

    <div style="padding:20px; background:#f8d7da; border-radius:8px;">
        <h3>Barang Dipinjam</h3>
        <p style="font-size:24px;">{{ $dipinjam }}</p>
    </div>

    <div style="padding:20px; background:#d4edda; border-radius:8px;">
        <h3>Total Transaksi</h3>
        <p style="font-size:24px;">{{ $totalPeminjaman }}</p>
    </div>

</div>
@endsection
