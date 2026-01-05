<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SILIH</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: Arial, sans-serif; margin: 0 }
        nav {
            background: #8B0000;
            padding: 15px;
            display: flex;
            align-items: center;
        }
        nav a, nav button {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
            background: none;
            border: none;
            cursor: pointer;
        }
        nav a:hover, nav button:hover {
            text-decoration: underline;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="nav-left">
        <span class="brand">SILIH</span>
        <a href="{{ route('home') }}">Home</a>

        @auth
            <a href="{{ route('barang') }}">Barang</a>
            <a href="{{ route('peminjaman.index') }}">Peminjaman</a>
            <a href="{{ route('kontak') }}">Kontak</a>
            <a href="{{ route('profile') }}">Profile</a>

            @if(auth()->user()->role === 'admin')
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @endif
        @endauth
    </div>

    <div class="nav-right">
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</nav>


@if(session('success'))
    <div style="background:#d4edda; padding:10px; margin:10px; color:#155724;">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div style="background:#f8d7da; padding:10px; margin:10px; color:#721c24;">
        {{ session('error') }}
    </div>
@endif

<div class="container">
    @yield('content')
</div>

</body>
</html>
