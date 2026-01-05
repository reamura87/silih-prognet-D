@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<div class="profile-page">

    <div class="profile-card">
        <img src="{{ asset('img/avatar-default.jpg') }}" class="profile-avatar">

        <h2>{{ auth()->user()->name }}</h2>
        <span class="profile-jurusan">Mahasiswa Teknologi Informasi</span>

        <div class="profile-info">
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
            <p><strong>NIM:</strong> {{ auth()->user()->nim }}</p>
            <p>
                <strong>Role:</strong>
                <span class="role-badge">{{ ucfirst(auth()->user()->role === 'admin' ? 'Admin' : 'Mahasiswa') }}</span>
            </p>
        </div>

        <small class="note">*Profil tidak dapat diedit</small>
    </div>

</div>
@endsection
