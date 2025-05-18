@extends('auth.layouts.app')
@section('content')
<div class="col-lg-5">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Login</h3>
        </div>
        <div class="card-body">
            {{-- Session Status --}}
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required
                        autofocus autocomplete="username" />
                    <label for="email">Email address</label>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" type="password" name="password" required
                        autocomplete="current-password" />
                    <label for="password">Password</label>
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
                    @if (Route::has('password.request'))
                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small">
                <a href="{{ route('register') }}">Need an account? Sign up!</a>
            </div>
        </div>
    </div>
</div>
@endsection