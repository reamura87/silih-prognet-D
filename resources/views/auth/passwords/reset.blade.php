<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reset Password | SILIH</title>
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
                Create<br>
                <span>New Password</span>
            </h1>

            <p>
                Silakan buat password baru
                untuk mengamankan kembali
                akun SILIH Anda.
            </p>
        </div>

        {{-- RIGHT PANEL --}}
        <div class="login-right">
            <h2>Password Baru</h2>
            <p class="auth-subtitle">
                Pastikan password kuat dan mudah diingat
            </p>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                {{-- EMAIL --}}
                <div class="form-group">
                    <label>Email Address</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ $email ?? old('email') }}"
                        required
                        autofocus>

                    @error('email')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                {{-- PASSWORD --}}
                <div class="form-group">
                    <label>Password Baru</label>
                    <input
                        type="password"
                        name="password"
                        required>

                    @error('password')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        required>
                </div>

                <button type="submit" class="btn-primary reset-spacing">
                    RESET PASSWORD
                </button>

                <div class="form-note">
                    Demi keamanan akun, jangan gunakan password
                    yang sama dengan akun lain.
                </div>
            </form>

            <a href="{{ route('login') }}" class="btn-secondary">
                ← Kembali ke Login
            </a>
        </div>

    </div>
</div>

</body>
</html>
