@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/barang.css') }}">

<div class="barang-container">
    <h2>Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data" class="barang-card" style="max-width:400px">
        @csrf

        <label>Nama Barang</label>
        <input type="text" name="nama" required>

        <label>Stok</label>
        <input type="number" name="stok" required>

        <label>Gambar Barang</label>
        <input type="file" name="gambar">

        <button type="submit" class="btn-pinjam" style="margin-top:10px">
            Simpan
        </button>
    </form>
</div>
@endsection
