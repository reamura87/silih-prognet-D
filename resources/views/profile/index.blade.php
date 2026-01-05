@extends('layouts.app')

@section('content')
<div class="profile-wrapper">
    <div class="profile-card">

        <div class="profile-header">
            <h2>Profil Saya</h2>
            <p>Informasi akun yang sedang login</p>
        </div>

        <div class="profile-body">
            <div class="profile-row">
                <span class="label">Nama</span>
                <span class="value">{{ auth()->user()->name }}</span>
            </div>

            <div class="profile-row">
                <span class="label">NIM</span>
                <span class="value">{{ auth()->user()->nim ?? '-' }}</span>
            </div>

            <div class="profile-row">
                <span class="label">Email</span>
                <span class="value">{{ auth()->user()->email }}</span>
            </div>

            <div class="profile-row">
                <span class="label">Role</span>
                <span class="badge">
                    {{ ucfirst(auth()->user()->role) }}
                </span>
            </div>
        </div>

    </div>
</div>
@endsection
