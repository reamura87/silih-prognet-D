<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | SILIH</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<nav class="auth-navbar">
    <div class="nav-left">
        <strong>SILIH</strong>
    </div>
    <div class="nav-right">
        <a href="{{ route('register') }}">Register</a>
    </div>
</nav>

<div class="auth-container">
    <!-- KIRI -->
    <div class="auth-left">
        <img src="{{ asset('img/login-illustration.svg') }}" alt="Login Illustration">
    </div>

    <!-- KANAN -->
    <div class="auth-right">
        <div class="auth-card">
            <h2>Selamat Datang di <br><span>SILIH</span></h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required autofocus>
                </div>

                <div class="form-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn-login">Login</button>

                <p class="divider">Atau</p>

                <a href="{{ route('register') }}" class="btn-register">Buat Akun</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
