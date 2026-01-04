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

    <div class="home-card">
        <h3>📦 Barang</h3>
        <p>Lihat dan pinjam barang inventaris</p>
        <a href="{{ route('barang') }}" class="home-btn">Lihat Barang</a>
    </div>

    <div class="home-card">
        <h3>📝 Peminjaman</h3>
        <p>Riwayat peminjaman barang</p>
        <a href="{{ route('peminjaman.index') }}" class="home-btn">Lihat Peminjaman</a>
    </div>

    <div class="home-card">
        <h3>👤 Profile</h3>
        <p>Informasi akun anda</p>
        <a href="{{ route('profile') }}" class="home-btn">Buka Profile</a>
    </div>

    <div class="home-card">
        <h3>📞 Kontak</h3>
        <p>Hubungi Ketua Himpunan & Sarpras</p>
        <a href="{{ route('kontak') }}" class="home-btn">Lihat Kontak</a>
    </div>

    @if(auth()->user()->role === 'admin')
        <div class="home-card admin-card">
            <h3>📊 Dashboard</h3>
            <p>Kelola sistem & data peminjaman</p>
            <a href="{{ route('dashboard') }}" class="home-btn">Masuk Dashboard</a>
        </div>
    @endif

</div>

{{-- INFO --}}
<div class="home-info">
    <p>
        SILIH digunakan untuk mengelola peminjaman barang inventaris
        secara terpusat, transparan, dan mudah digunakan oleh anggota
        maupun pengurus.
    </p>
</div>

@endsection
