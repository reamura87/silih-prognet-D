@foreach($peminjamans as $p)
<div>
    {{ $p->nama_peminjam }} - {{ $p->barang->nama }}

    <form action="{{ route('admin.peminjaman.acc', $p->id) }}" method="POST">
        @csrf
        <button>ACC</button>
    </form>

    <form action="{{ route('admin.peminjaman.tolak', $p->id) }}" method="POST">
        @csrf
        <button>Tolak</button>
    </form>
</div>
@endforeach
