@extends('layouts.app')

@section('content')

{{-- FORCE CSS (AMAN, TIDAK BIKIN ERROR) --}}
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div class="home-hero">
    <h1>SILIH</h1>
    <p>Sistem Informasi Layanan Inventaris Himpunan</p>

    <span class="role-badge">
        Login sebagai <b>{{ auth()->user()->role }}</b>
    </span>
</div>

{{-- QUICK MENU --}}
<div class="home-grid">

    <div class="home-card homebarang">
        <div class="card-icon">📦</div>

        <h3>Barang Inventaris</h3>
        <p class="card-desc">
            Menampilkan seluruh daftar barang inventaris milik himpunan,
            lengkap dengan kondisi, jumlah stok, dan status ketersediaan.
        </p>

        <ul class="card-list">
            <li>✔ Data barang terbaru</li>
            <li>✔ Informasi kondisi barang</li>
            <li>✔ Status tersedia / dipinjam</li>
        </ul>

        <div class="card-footer">
            <span class="card-badge badge-ready">Tersedia</span>
            <a href="{{ route('barang.index') }}" class="home-btn">
                Lihat Barang
            </a>
        </div>
    </div>

    <div class="home-card homepinjam">
        <div class="card-icon">📝</div>

        <h3>Peminjaman</h3>
        <p class="card-desc">
            Fitur untuk melihat riwayat peminjaman barang, status pengajuan,
            serta masa peminjaman yang sedang berjalan.
        </p>

        <ul class="card-list">
            <li>✔ Riwayat peminjaman</li>
            <li>✔ Status disetujui / ditolak</li>
            <li>✔ Monitoring waktu pinjam</li>
        </ul>

        <div class="card-footer">
            <span class="card-badge badge-process">Aktif</span>
            <a href="{{ route('peminjaman.index') }}" class="home-btn">
                Lihat Peminjaman
            </a>
        </div>
    </div>

    <div class="home-card homeprofil">
        <div class="card-icon">👤</div>

        <h3>Profile Pengguna</h3>
        <p class="card-desc">
            Halaman pengelolaan data akun pengguna, termasuk informasi pribadi
            dan peran dalam sistem SILIH.
        </p>

        <ul class="card-list">
            <li>✔ Data akun</li>
            <li>✔ Hak akses pengguna</li>
            <li>✔ Informasi role</li>
        </ul>

        <div class="card-footer">
            <span class="card-badge badge-user">
                {{ auth()->user()->role }}
            </span>
            <a href="{{ route('profile') }}" class="home-btn">
                Buka Profile
            </a>
        </div>
    </div>

    <div class="home-card homekontak">

        <div class="card-icon">📞</div>

        <h3>Kontak & Informasi</h3>
        <p class="card-desc">
            Informasi kontak pengurus, ketua himpunan, serta divisi sarana
            dan prasarana untuk kebutuhan koordinasi.
        </p>

        <ul class="card-list">
            <li>✔ Ketua Himpunan</li>
            <li>✔ Pengurus Sarpras</li>
            <li>✔ Kontak resmi</li>
        </ul>

        <div class="card-footer">
            <span class="card-badge badge-info">Info</span>
            <a href="{{ route('kontak') }}" class="home-btn">
                Lihat Kontak
            </a>
        </div>
    </div>

    @if(auth()->user()->role === 'admin')
        <div class="home-card admin-card">
            <div class="card-icon">📊</div>

            <h3>Dashboard Admin</h3>
            <p class="card-desc">
                Akses khusus admin untuk mengelola sistem, data barang,
                peminjaman, serta pengguna.
            </p>

            <ul class="card-list">
                <li>✔ Kelola data barang</li>
                <li>✔ Validasi peminjaman</li>
                <li>✔ Manajemen pengguna</li>
            </ul>

            <div class="card-footer">
                <span class="card-badge badge-admin">Admin</span>
                <a href="{{ route('dashboard') }}" class="home-btn admin-btn">
                    Masuk Dashboard
                </a>
            </div>
        </div>
    @endif

</div>


{{-- INFO --}}
<div class="home-info">
    <p>
<<<<<<< HEAD
        SILIH digunakan untuk mengelola peminjaman barang Inventaris
        secara Terpusat, Transparan, dan mudah digunakan oleh Anggota
        maupun Pengurus Dari Setiap Mahasia Teknologi Informasi.
=======
        <b>SILIH</b> digunakan untuk mengelola peminjaman barang inventaris
        secara terpusat, transparan, dan mudah digunakan oleh anggota
        maupun pengurus Dari Setiap Mahasia Teknologi Informasi.
>>>>>>> 57a1a616c177b39c463a2d4adada0d849956b37e
    </p>

    {{-- dekorasi --}}
    <div class="info-badges">
        <span class="info-pill">Cepat</span>
        <span class="info-pill">Transparan</span>
        <span class="info-pill">Terpusat</span>
        <span class="info-pill">Aman</span>
    </div>
</div>

@endsection
