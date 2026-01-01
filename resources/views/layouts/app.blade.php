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
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('dashboard') }}">Dashboard</a>
    <a href="{{ route('barang') }}">Barang</a>
    <a href="{{ route('peminjaman.index') }}">Peminjaman</a>
    <a href="{{ route('ruangan') }}">Ruangan</a>
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
