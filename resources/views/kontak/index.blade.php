@extends('layouts.app')

@section('content')
<div class="kontak-wrapper">
    <h2>Kontak Penting</h2>
    <p class="subtitle">Hubungi pengurus terkait jika ada kendala peminjaman</p>

    <div class="kontak-grid">

        {{-- Ketua Himpunan --}}
        <div class="kontak-card">
            <h3>Ketua Himpunan</h3>
            <p><strong>Nama:</strong> I Made Contoh Ketua</p>
            <p><strong>Email:</strong> ketua@himpunan.test</p>
            <a 
                href="https://wa.me/6281234567890" 
                target="_blank" 
                class="btn-wa"
            >
                Hubungi via WhatsApp
            </a>
        </div>

        {{-- Ketua Sarpras --}}
        <div class="kontak-card">
            <h3>Ketua Sarpras</h3>
            <p><strong>Nama:</strong> I Made Contoh Sarpras</p>
            <p><strong>Email:</strong> sarpras@himpunan.test</p>
            <a 
                href="https://wa.me/6289876543210" 
                target="_blank" 
                class="btn-wa"
            >
                Hubungi via WhatsApp
            </a>
        </div>

    </div>
</div>
@endsection
