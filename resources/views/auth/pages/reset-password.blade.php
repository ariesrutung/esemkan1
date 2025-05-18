@extends('auth.layouts.app')
@section('content')
<div class="col-lg-5">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Reset Password</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" name="email"
                        value="{{ old('email', $request->email) }}" required autofocus />
                    <label for="email">Email address</label>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="password" type="password" name="password" required
                        autocomplete="new-password" />
                    <label for="password">New Password</label>
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="form-floating mb-3">
                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation"
                        required autocomplete="new-password" />
                    <label for="password_confirmation">Confirm Password</label>
                    @error('password_confirmation')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <a class="small" href="{{ route('login') }}">Back to login</a>
                    <button type="submit" class="btn btn-primary">Reset Password</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small">
                <a href="{{ route('register') }}">Need an account? Register!</a>
            </div>
        </div>
    </div>
</div>
@endsection