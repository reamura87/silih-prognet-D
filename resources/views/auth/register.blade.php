<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | SILIH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="auth-body">

    <div class="login-wrapper">

        <div class="login-card">

            {{-- LEFT PANEL --}}
            <div class="login-left">
                <span class="badge">SISTEM INFORMASI</span>

                <h1>
                    Create Account<br>
                    <span>SILIH</span>
                </h1>

                <p>
                    Daftarkan akun untuk mengakses Sistem Informasi
                    Layanan & Inventaris secara terintegrasi,
                    aman, dan profesional.
                </p>
            </div>

            {{-- RIGHT PANEL --}}
            <div class="login-right">
                <h2>Register Account</h2>
                <p class="subtitle">
                    Lengkapi data untuk membuat akun baru
                </p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required>
                        @error('name')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required>
                        @error('email')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input
                            type="password"
                            name="password"
                            required>
                        @error('password')
                            <small style="color:red">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input
                            type="password"
                            name="password_confirmation"
                            required>
                    </div>

                    <button type="submit" class="btn-primary">
                        DAFTAR
                    </button>
                </form>

                <p class="register-text">
                    Sudah punya akun?
                    <a href="{{ route('login') }}">Login sekarang</a>
                </p>
            </div>

        </div>

    </div>

</body>
</html>
