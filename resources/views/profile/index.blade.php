@extends('layouts.app')

@section('content')
<div class="profile-wrapper">
    <div class="profile-card">

        <div class="avatar">
            <img src="{{ asset('img/avatar-default.jpg') }}" alt="Avatar">
        </div>

        <h2 class="name">{{ auth()->user()->name }}</h2>
        <p class="role">Mahasiswa Teknologi Informasi</p>

        <div class="profile-info">
            <p><strong>Email:</strong> {{ auth()->user()->email }}</p>

            @if(auth()->user()->nim)
                <p><strong>NIM:</strong> {{ auth()->user()->nim }}</p>
            @endif

            <p>
                <strong>Role:</strong>
                <span class="badge-role {{ auth()->user()->role }}">
                {{ ucfirst(auth()->user()->role === 'admin' ? 'Administrator' : 'Mahasiswa') }}
            </span>
        </p>
    </div>


        <button class="btn-edit" disabled>Edit Profil</button>
        <small class="note">*Profil tidak dapat diedit</small>

    </div>
</div>
@endsection
