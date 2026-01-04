@extends('layouts.app')

@section('content')
<h2>Kontak Penting</h2>

<div style="display:flex; gap:20px; margin-top:20px;">

    {{-- Ketua Himpunan --}}
    <div style="border:1px solid #ccc; padding:15px; width:300px;">
        <h3>Ketua Himpunan</h3>
        <p><strong>Nama:</strong> Dedek Gemez</p>
        <p><strong>Email:</strong> blablabla@unud.ac.id</p>
        <p><strong>WhatsApp:</strong><br>
            <a href="https://wa.me/628128888999" target="_blank">
                Chat via WhatsApp
            </a>
        </p>
    </div>

    {{-- Ketua Sarpras --}}
    <div style="border:1px solid #ccc; padding:15px; width:300px;">
        <h3>Kepala Divisi Sarana Prasarana</h3>
        <p><strong>Nama:</strong> Ketuasarpras</p>
        <p><strong>Email:</strong> sarpras@unud.ac.id</p>
        <p><strong>WhatsApp:</strong><br>
            <a href="https://wa.me/628218100809090" target="_blank">
                Chat via WhatsApp
            </a>
        </p>
    </div>

</div>
@endsection
