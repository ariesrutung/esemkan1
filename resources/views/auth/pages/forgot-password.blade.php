@extends('auth.layouts.app')
@section('content')
<div class="col-lg-5">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Reset Password</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 small text-muted">
                Forgot your password? No problem. Just let us know your email address and
                we will email you a password reset link.
            </div>

            <!-- Session Status -->
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required
                        autofocus />
                    <label for="email">Email address</label>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <a class="small" href="{{ route('login') }}">Back to login</a>
                    <button type="submit" class="btn btn-primary">Send Reset Link</button>
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