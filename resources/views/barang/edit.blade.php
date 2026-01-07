@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/barang.css') }}">

<div class="barang-form-wrapper">
    <div class="barang-form-card">
        <h2>Edit Barang</h2>

        <form action="{{ route('barang.update', $barang->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

                        

            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama"
                       value="{{ old('nama', $barang->nama) }}" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" min="0"
                       value="{{ old('stok', $barang->stok) }}" required>
            </div>

            <div class="form-group">
                <label>Gambar Barang</label>
                <input type="file" name="gambar" accept="image/*">
                <small>* Kosongkan jika tidak diganti</small>
            </div>

            <button type="submit" class="btn-submit">
                Update Barang
            </button>
        </form>

                <form action="{{ route('barang.destroy', $barang->id) }}"
                    method="POST"
                    onsubmit="return confirm('⚠️ Yakin ingin menghapus barang ini? Data tidak bisa dikembalikan!')"
                    class="form-delete">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn-delete">
                        Hapus Barang
                    </button>
                </form>

    </div>

</div>


@endsection
