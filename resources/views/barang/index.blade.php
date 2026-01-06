@extends('layouts.app')

@section('content')
<h2>Daftar Barang</h2>

<div class="grid">
@foreach($barangs as $barang)
    <div class="card">
        <h3>{{ $barang->nama }}</h3>
        <p>Stok: <b>{{ $barang->stok }}</b></p>

        <form action="{{ route('barang.pinjam', $barang->id) }}" method="POST">
            @csrf
            <button class="btn {{ $barang->stok == 0 ? 'btn-disabled' : 'btn-primary' }}"
                {{ $barang->stok == 0 ? 'disabled' : '' }}>
                Pinjam
            </button>
        </form>
    </div>
@endforeach
@auth
  <!-- 🔥 BOX TAMBAH BARANG -->
    <a href="{{ route('barang.create') }}" class="card add-barang">
        <div class="plus">+</div>
        <button class="btn btn-primary">Tambah Barang</button>
    </a>
</div>
@endauth
@endsection
