@extends('layouts.app')

@section('content')
<div class="card" style="max-width:400px;">
    <h2>Profile</h2>
    <p><b>Nama:</b> {{ auth()->user()->name }}</p>
    <p><b>NIM:</b> {{ auth()->user()->nim }}</p>
    <p><b>Email:</b> {{ auth()->user()->email }}</p>
</div>
@endsection
