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
</div>
@endsection
