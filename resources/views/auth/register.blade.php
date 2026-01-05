<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | SILIH</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>

<!-- NAVBAR AUTH -->
<nav class="auth-navbar">
    <div class="nav-left">SILIH</div>
    <div class="nav-right">
        <a href="{{ route('login') }}">Login</a>
    </div>
</nav>

<!-- REGISTER CONTAINER -->
<div class="auth-container">

    <div class="auth-card">
        <h2>Buat Akun SILIH</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <input type="text" name="name" placeholder="Nama Lengkap"
                       value="{{ old('name') }}" required>
                @error('name') <small>{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email"
                       value="{{ old('email') }}" required>
                @error('email') <small>{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
                @error('password') <small>{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation"
                       placeholder="Konfirmasi Password" required>
            </div>

            <button type="submit" class="btn-primary">Register</button>

            <p class="auth-alt">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login</a>
            </p>
        </form>
    </div>

</div>

</body>
</html>
