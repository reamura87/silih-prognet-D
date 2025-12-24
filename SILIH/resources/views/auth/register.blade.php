<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - SILIH</title>
    <link rel="stylesheet" href="{{ asset('assets/register.css') }}">
</head>
<body>

<h2>Register</h2>

@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="/register">
    @csrf

    <label>Nama</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <label>Konfirmasi Password</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>

<p>Sudah punya akun? <a href="/login">Login</a></p>

</body>
</html>
