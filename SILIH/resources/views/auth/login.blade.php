<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - SILIH</title>
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">

</head>
<body>

<header>
    <div class="logo">SILIH</div>
    <nav>
        <a href="/kontak">Kontak</a>
    </nav>
</header>

<section class="login-section">
    <div class="login-form">
        <h2>Login</h2>

        @if(session('error'))
            <div class="error-message">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <label>Username</label>
            <input type="text" name="username" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>

        <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
        <a href="/" class="back-button">Kembali ke Beranda</a>
    </div>
</section>

</body>
</html>
