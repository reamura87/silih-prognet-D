@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <strong>Profile Saya</strong>
                </div>

                <div class="card-body">
                    
                    {{-- Nama --}}
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end">Nama</label>
                        <div class="col-md-6">
                            <input type="text"
                                   class="form-control"
                                   value="{{ auth()->user()->name }}"
                                   readonly>
                        </div>
                    </div>

                    {{-- NIM (kalau name = NIM) --}}
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end">NIM</label>
                        <div class="col-md-6">
                            <input type="text"
                                   class="form-control"
                                   value="{{ auth()->user()->name }}"
                                   readonly>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end">Email</label>
                        <div class="col-md-6">
                            <input type="email"
                                   class="form-control"
                                   value="{{ auth()->user()->email }}"
                                   readonly>
                        </div>
                    </div>

                    {{-- Role --}}
                    <div class="mb-3 row">
                        <label class="col-md-4 col-form-label text-md-end">Role</label>
                        <div class="col-md-6">
                            <input type="text"
                                   class="form-control"
                                   value="{{ ucfirst(auth()->user()->role) }}"
                                   readonly>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
