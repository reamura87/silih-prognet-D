@extends('layouts.app')

@section('content')

{{-- HERO --}}
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
        <h3>📦 Barang</h3>
        <p>Lihat dan Pinjam Barang Inventaris</p>
        <a href="{{ route('barang.index') }}" class="home-btn">Lihat Barang</a>
    </div>

    <div class="home-card homepinjam">
        <h3>📝 Peminjaman</h3>
        <p>Riwayat Peminjaman Barang</p>
        <a href="{{ route('peminjaman.index') }}" class="home-btn">Lihat Peminjaman</a>
    </div>

    <div class="home-card homeprofil">
        <h3>👤 Profile</h3>
        <p>Informasi Akun Anda</p>
        <a href="{{ route('profile') }}" class="home-btn">Buka Profile</a>
    </div>

    <div class="home-card homekontak">
        <h3>📞 Kontak</h3>
        <p>Hubungi Ketua Himpunan & Kabid Sarpras</p>
        <a href="{{ route('kontak') }}" class="home-btn">Lihat Kontak</a>
    </div>

    @if(auth()->user()->role === 'admin')
        <div class="home-card admin-card">
            <h3>📊 Dashboard</h3>
            <p>Kelola Sistem & Data Peminjaman</p>
            <a href="{{ route('dashboard') }}" class="home-btn">Masuk Dashboard</a>
        </div>
    @endif

</div>

{{-- INFO --}}
<div class="home-info">
    <p>
        SILIH digunakan untuk mengelola peminjaman barang Inventaris
        secara Terpusat, Transparan, dan mudah digunakan oleh Anggota
        maupun Pengurus Dari Setiap Mahasia Teknologi Informasi.
    </p>
</div>

@endsection
