@extends('layouts.app')

@section('content')
<h2 style="margin-bottom:20px;">Peminjaman Pending</h2>

@if($peminjamans->isEmpty())
    <div class="alert alert-info">
        Tidak ada peminjaman yang menunggu persetujuan
    </div>
@else
    <div class="card-table">
    <table class="table-custom">
        <thead>
            <tr>
                <th>Peminjam</th>
                <th>Barang</th>
                <th>Tgl Pinjam</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($peminjamans as $peminjaman)
            <tr>
                <td>{{ $peminjaman->user->name }}</td>
                <td>{{ $peminjaman->barang->nama }}</td>
                <td>{{ \Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->format('d M Y') }}</td>
                <td>
                    <span class="badge bg-warning">Pending</span>
                </td>
                <td>
                    <form action="{{ route('admin.peminjaman.acc', $peminjaman->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">ACC</button>
                    </form>
                    
                    <form action="{{ route('admin.peminjaman.tolak', $peminjaman->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Tolak</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    </div>
@endif

@endsection
