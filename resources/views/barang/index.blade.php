@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/barang.css') }}">

<div class="barang-container">
    <h2>Daftar Barang</h2>

    @if(auth()->user()->role === 'admin')
        <a href="{{ route('barang.create') }}" class="btn-add">
            + Tambah Barang
        </a>
    @endif

    <div class="barang-grid">
        @foreach($barangs as $barang)
            <div class="barang-card">
                <img 
                    src="{{ asset('img/barang/' . ($barang->gambar ?? 'default.png')) }}"
                    alt="{{ $barang->nama }}"
                    App\Models\Barang::first();
                >

                <h3>{{ $barang->nama }}</h3>
                <p>Stok: <strong>{{ $barang->stok }}</strong></p>

                <form action="{{ route('barang.pinjam', $barang->id) }}" method="POST">
                    @csrf
                    <button 
                        class="btn-pinjam"
                        {{ $barang->stok <= 0 ? 'disabled' : '' }}
                    >
                        {{ $barang->stok > 0 ? 'Pinjam' : 'Habis' }}
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
