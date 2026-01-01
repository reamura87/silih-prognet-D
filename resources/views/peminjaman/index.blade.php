@extends('layouts.app')

@section('content')
<h2>Histori Peminjaman</h2>

<table border="1" width="100%" cellpadding="10">
<thead>
<tr>
    <th>Barang</th>

    @if(auth()->user()->role === 'admin')
        <th>Peminjam</th>
    @endif

    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
@forelse($peminjamans as $peminjaman)
<tr>
    <td>{{ $peminjaman->barang->nama }}</td>

    @if(auth()->user()->role === 'admin')
        <td>{{ $peminjaman->user->name }}</td>
    @endif

    <td>{{ $peminjaman->tanggal_pinjam }}</td>

    <td>{{ $peminjaman->tanggal_kembali ?? '-' }}</td>

    <td>
        @if($peminjaman->status === 'Dipinjam')
            <span style="color:red;font-weight:bold;">Dipinjam</span>
        @else
            <span style="color:green;font-weight:bold;">Dikembalikan</span>
        @endif
    </td>

    <td>
        @if($peminjaman->status === 'Dipinjam')
            <form action="{{ route('peminjaman.kembali', $peminjaman->id) }}" method="POST">
                @csrf
                <button type="submit">Kembalikan</button>
            </form>
        @else
            -
        @endif
    </td>
</tr>
@empty
<tr>
    <td colspan="5" align="center">
        Belum ada data peminjaman
    </td>
</tr>
@endforelse
</tbody>
</table>
@endsection
