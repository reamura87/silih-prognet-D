@extends('layouts.app')

@section('content')
<h2>Dashboard SILIH</h2>

<div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:20px">

    <div style="border:1px solid #ccc;padding:20px;border-radius:8px">
        <h3>Total Barang</h3>
        <p style="font-size:24px">{{ $totalBarang }}</p>
    </div>

    <div style="border:1px solid #ccc;padding:20px;border-radius:8px">
        <h3>Total Stok</h3>
        <p style="font-size:24px">{{ $totalStok }}</p>
    </div>

    <div style="border:1px solid #ccc;padding:20px;border-radius:8px">
        <h3>Barang Dipinjam</h3>
        <p style="font-size:24px;color:red">{{ $dipinjam }}</p>
    </div>

    <div style="border:1px solid #ccc;padding:20px;border-radius:8px">
        <h3>Total Peminjaman</h3>
        <p style="font-size:24px">{{ $totalPeminjaman }}</p>
    </div>

</div>
@endsection
