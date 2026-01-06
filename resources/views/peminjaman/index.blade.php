@extends('layouts.app')

@section('content')
<h2 style="margin-bottom:20px;">Histori Peminjaman</h2>

<div class="card-table">
<table class="table-custom">
    <thead>
        <tr>
            <th>Barang</th>

            @if(auth()->user()->role === 'admin')
                <th>Peminjam</th>
            @endif

            <th>Tgl Pinjam</th>
            <th>Tgl Kembali</th>
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

            <td>{{ \Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->format('d M Y') }}</td>
            <td>
                {{ $peminjaman->tanggal_kembali 
                    ? \Carbon\Carbon::parse($peminjaman->tanggal_kembali)->format('d M Y') 
                    : '-' }}
            </td>

            <td>
                @if($peminjaman->status === 'Dipinjam')
                    <span class="badge badge-red">Dipinjam</span>
                @else
                    <span class="badge badge-green">Dikembalikan</span>
                @endif
            </td>

            <td>
                @if($peminjaman->status === 'Dipinjam')
                    <form action="{{ route('peminjaman.kembali', $peminjaman->id) }}" method="POST">
                        @csrf
                        <button class="btn-kembali">Kembalikan</button>
                    </form>
                @else
                    <span class="muted">-</span>
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="empty">
                Belum ada data peminjaman
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
</div>
@endsection
