@extends('layouts.app')

@section('content')
<h2>Histori Peminjaman</h2>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Barang</th>
            <th>Peminjam</th>
            <th>Tgl Pinjam</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($peminjamans as $p)
        <tr>
            <td>{{ $p->barang->nama }}</td>
            <td>{{ $p->nama_peminjam }}</td>
            <td>{{ $p->tanggal_pinjam }}</td>
            <td>Dipinjam</td>
            <td>
                <form action="{{ route('peminjaman.kembali', $p->id) }}" method="POST">
                    @csrf
                    <button type="submit">Kembalikan</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" align="center">Belum ada peminjaman</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
