@extends('layouts.app')

@section('content')
<h2>Daftar Barang</h2>

<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px,1fr)); gap: 15px;">
    @foreach($barangs as $barang)
        <div style="border:1px solid #ccc; padding:15px; border-radius:8px;">
            <h3>{{ $barang->nama }}</h3>
            <p>Stok: {{ $barang->stok }}</p>
            <form action="{{ route('barang.pinjam', $barang->id) }}" method="POST">
                @csrf
                <button type="submit" {{ $barang->stok == 0 ? 'disabled' : '' }}>
                    Pinjam
                </button>
            </form>
        </div>
    @endforeach
</div>
@endsection
