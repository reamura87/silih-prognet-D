@extends('layouts.app')

@section('content')
<h2>Profil Pengguna</h2>

<table cellpadding="8">
    <tr>
        <td><strong>Nama</strong></td>
        <td>{{ auth()->user()->name }}</td>
    </tr>
    <tr>
        <td><strong>NIM</strong></td>
        <td>{{ auth()->user()->nim ?? '-' }}</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>{{ auth()->user()->email }}</td>
    </tr>
</table>
@endsection
