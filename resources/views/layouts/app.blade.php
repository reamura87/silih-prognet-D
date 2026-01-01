<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SILIH</title>
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

<nav>
    {{-- UMUM --}}
    <a href="{{ route('home') }}">Home</a>

    @auth
        {{-- USER & ADMIN --}}
        <a href="{{ route('barang') }}">Barang</a>
        <a href="{{ route('peminjaman.index') }}">Peminjaman</a>
        <a href="{{ route('ruangan') }}">Ruangan</a>

        {{-- KHUSUS ADMIN --}}
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @endif

        {{-- LOGOUT --}}
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @else
        {{-- BELUM LOGIN --}}
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endauth
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
