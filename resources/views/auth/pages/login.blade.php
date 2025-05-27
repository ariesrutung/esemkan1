@extends('auth.layouts.app')
@section('content')

<div class="card shadow-lg border-0 rounded-lg mt-5">
    <div class="card-header flex-column d-flex align-items-center justify-content-between">
        <img class="img-fluid w-50" src="{{ asset('themes/frontend/assets/img/logos/logo-smk1.png') }}"
            alt="SMK Negeri 1 Manokwari">
    </div>
    <div class="card-body">
        <h5 class="text-center font-weight-bold fw-bold m-0">Silakan Login</h5>
        <hr>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-floating mb-3">
                <label for="email">Email address</label>
                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required
                    autofocus autocomplete="username" />
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <label for="password">Password</label>
                <input class="form-control" id="password" type="password" name="password" required
                    autocomplete="current-password" />
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" name="remember" id="remember_me" type="checkbox" />
                <label class="form-check-label" for="remember_me">
                    Remember Password
                </label>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection