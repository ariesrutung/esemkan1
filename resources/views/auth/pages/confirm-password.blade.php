@extends('auth.layouts.app')
@section('content')
<div class="col-lg-5">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Confirm Password</h3>
        </div>
        <div class="card-body">
            <div class="mb-3 small text-muted">
                This is a secure area of the application. Please confirm your password
                before continuing.
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="form-floating mb-3">
                    <input class="form-control" id="password" type="password" name="password" required
                        autocomplete="current-password" />
                    <label for="password">Password</label>
                    @error('password')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small">
                <a href="{{ route('login') }}">Back to login</a>
            </div>
        </div>
    </div>
</div>
@endsection