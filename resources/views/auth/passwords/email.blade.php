<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lupa Password | SILIH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body class="auth-body">

<div class="login-wrapper">
    <div class="login-card">

        {{-- LEFT PANEL --}}
        <div class="login-left">
            <span class="badge">SISTEM INFORMASI LAYANAN INVENTARIS HIMPUNAN</span>

            <h1>
                Forgot<br>
                <span>Password?</span>
            </h1>

            <p>
                Jangan khawatir. Masukkan email terdaftar
                dan kami akan mengirimkan link
                untuk mengatur ulang password akun Anda.
            </p>
        </div>

        {{-- RIGHT PANEL --}}
        <div class="login-right">
            <h2>Reset Password</h2>
            <p class="auth-subtitle">
                Masukkan email akun SILIH Anda
            </p>

            @if (session('status'))
                <div class="auth-alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label>Email Address</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus>

                    @error('email')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-primary">
                    KIRIM LINK RESET
                </button>
            </form>

            <a href="{{ route('login') }}" class="btn-secondary">
                ← Kembali ke Login
            </a>
        </div>

    </div>
</div>

</body>
</html>
