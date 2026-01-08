@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/barang.css') }}">

<div class="barang-container">
    <h2>Daftar Barang</h2>

    {{-- Tombol tambah barang hanya untuk admin --}}
    @if(auth()->user()->role === 'admin')
        <a href="{{ route('barang.create') }}" class="btn-add">
            + Tambah Barang
        </a>
    @endif

    <div class="barang-grid">
        @foreach($barangs as $barang)
            <div class="barang-card">

                {{-- BAGIAN ATAS CARD --}}
                <div class="barang-body">
                    <img 
                        src="{{ asset('img/barang/' . ($barang->gambar ?: 'default.png')) }}"
                        alt="{{ $barang->nama }}"
                        class="barang-img"
                    >

                    <h3 class="barang-nama">{{ $barang->nama }}</h3>
                    <p class="barang-stok">
                        Stok: <strong>{{ $barang->stok }}</strong>
                    </p>
                </div>

                {{-- BAGIAN BAWAH CARD (TOMBOL) --}}
                @if(auth()->user()->role !== 'admin') <!-- Tombol Pinjam hanya untuk non-admin -->
                    <form action="{{ route('barang.pinjam', $barang->id) }}" method="POST">
                        @csrf
                        <button 
                            class="btn-pinjam"
                            {{ $barang->stok <= 0 ? 'disabled' : '' }}
                        >
                            {{ $barang->stok > 0 ? 'Pinjam' : 'Habis' }}
                        </button>
                    </form>
                @endif

                {{-- Tombol Edit hanya untuk admin --}}
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-edit"> Edit</a>
                    @endif
                @endauth
            </div>
        @endforeach
    </div>
</div>

@endsection
