@extends('layouts.app')


@section('content')
<h2>Tambah Barang</h2>

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <label>Nama Barang</label>
    <input type="text" name="nama" required>

    <label>Stok</label>
    <input type="number" name="stok" required>

    <button type="submit">Simpan</button>
</form>
@endsection
