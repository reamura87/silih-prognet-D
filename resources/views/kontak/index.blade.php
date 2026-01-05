@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">

<div class="kontak-wrapper">
    <h1>Kontak Kami</h1>
    <p class="subtitle">
        Hubungi pihak terkait untuk informasi peminjaman fasilitas kampus
    </p>

    <div class="kontak-grid">

        <!-- Ketua Himpunan -->
        <div class="kontak-card">
            <img src="{{ asset('img/avatar-default.jpg') }}" class="avatar" alt="Kaprodi">
            <h3>Siapa Yak</h3>
            <span class="jabatan">Ketua Himpunan Mahasiswa Teknologi Informasi</span>

            <div class="info">
                <p>📞 <a href="https://wa.me/6281299999999">0812-9999-9999</a></p>
                <p>📧 kahim@unud.ac.id</p>
            </div>
        </div>

        <!-- Kepala Divisi Sarana Prasarana -->
        <div class="kontak-card">
            <img src="{{ asset('img/avatar-default.jpg') }}" class="avatar" alt="Ketua Himpunan">
            <h3>Siapa Yak</h3>
            <span class="jabatan">Kadiv Sarana Prasarana Himpunan Mahasiswa Teknologi Informasi</span>

            <div class="info">
                <p>📞 <a href="https://wa.me/6282180809091">0821-8080-9091</a></p>
                <p>📧 sarpras@unud.ac.id</p>
            </div>
        </div>

    </div>
</div>
@endsection
