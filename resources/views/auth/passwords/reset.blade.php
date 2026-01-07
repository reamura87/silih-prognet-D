@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="row w-100 justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-white border-0 text-center pt-4">
                    <h4 class="fw-bold mb-1">Reset Password</h4>
                    <p class="text-muted small">
                        Buat password baru untuk melanjutkan ke sistem <strong>SILIH</strong>
                    </p>
                </div>

                <div class="card-body px-4 pb-4">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        {{-- EMAIL --}}
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">
                                Email Address
                            </label>

                            <input id="email" type="email"
                                   class="form-control form-control-lg @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ $email ?? old('email') }}"
                                   required autofocus>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">
                                Password Baru
                            </label>

                            <input id="password" type="password"
                                   class="form-control form-control-lg @error('password') is-invalid @enderror"
                                   name="password"
                                   required>

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- CONFIRM PASSWORD --}}
                        <div class="mb-4">
                            <label for="password-confirm" class="form-label fw-semibold">
                                Konfirmasi Password
                            </label>

                            <input id="password-confirm" type="password"
                                   class="form-control form-control-lg"
                                   name="password_confirmation"
                                   required>
                        </div>

                        {{-- ACTION --}}
                        <div class="d-grid">
                            <button type="submit"
                                    class="btn btn-danger btn-lg rounded-pill fw-semibold">
                                Reset Password
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
