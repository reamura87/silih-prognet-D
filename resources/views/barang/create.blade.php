@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/barang.css') }}">

<div class="barang-container">
    <h2>Tambah Barang</h2>

    <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Barang</label>
        <input type="text" name="nama" required>

        <label>Stok</label>
        <input type="number" name="stok" min="0" required>

        <label>Gambar Barang</label>
        <input type="file" name="gambar" accept="image/*">

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
