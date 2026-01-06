@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/barang.css') }}">

<div class="barang-form-wrapper">
    <div class="barang-form-card">
        <h2>Tambah Barang</h2>

        <form action="{{ route('barang.store') }}" 
              method="POST" 
              enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" min="0" required>
            </div>

            <div class="form-group">
                <label>Gambar Barang</label>
                <input type="file" name="gambar" accept="image/*">
                <small>* JPG / PNG, max 2MB</small>
            </div>

            <button type="submit" class="btn-submit">
                Simpan Barang
            </button>
        </form>
    </div>
</div>
@endsection
