@extends('layouts.app')

@section('content')
<h2>Peminjaman Ruangan</h2>

<form>
    <label>Nama Ruangan</label><br>
    <input type="text" placeholder="Contoh: Ruang Rapat"><br><br>

    <label>Tanggal</label><br>
    <input type="date"><br><br>

    <label>Waktu</label><br>
    <input type="time"><br><br>

    <button type="submit">Ajukan Peminjaman</button>
</form>
@endsection
