<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | SILIH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="auth-body">

    <div class="login-wrapper">

        <div class="login-card">

            {{-- LEFT PANEL --}}
            <div class="login-left">
                <span class="badge">SISTEM LAYANAN</span>

                <h1>
                    Welcome<br>
                    <span>to SILIH</span>
                </h1>

                <p>
                    Sistem Informasi Layanan & Inventaris untuk
                    pengelolaan sarana dan prasarana yang transparan,
                    rapi, dan terintegrasi.
                </p>
            </div>

            {{-- RIGHT PANEL --}}
            <div class="login-right">
                <h2>Login Account</h2>
                <p class="subtitle">
                    Gunakan akun terdaftar untuk melanjutkan
                </p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <label>Email Address</label>
                        <input
                            type="email"
                            name="email"
                            required
                            autofocus>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input
                            type="password"
                            name="password"
                            required>
                    </div>

                    <div class="form-extra">
                        <label class="remember">
                            <input type="checkbox" name="remember">
                            Remember me
                        </label>

                        <a href="{{ route('password.request') }}"
                           class="forgot">
                            Lupa password?
                        </a>
                    </div>

                    <button type="submit" class="btn-primary">
                        MASUK
                    </button>
                </form>

                <p class="register-text">
                    Belum punya akun?
                    <a href="{{ route('register') }}">Daftar sekarang</a>
                </p>
            </div>

        </div>

    </div>

</body>
</html>
