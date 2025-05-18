@extends('auth.layouts.app')
@section('content')
<div class="col-lg-6">
    <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header">
            <h3 class="text-center font-weight-light my-4">Email Verification</h3>
        </div>
        <div class="card-body">
            <div class="mb-4 text-muted small">
                Thanks for signing up! Before getting started, could you verify your email
                address by clicking on the link we just emailed to you?
                If you didn't receive the email, we will gladly send you another.
            </div>

            @if (session('status') === 'verification-link-sent')
            <div class="alert alert-success" role="alert">
                A new verification link has been sent to the email address you provided during
                registration.
            </div>
            @endif

            <div class="d-flex justify-content-between align-items-center mt-4">
                <!-- Resend Verification Email -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                        Resend Verification Email
                    </button>
                </form>

                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link text-danger text-decoration-none">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
        <div class="card-footer text-center py-3">
            <div class="small">
                Need help? <a href="#">Contact support</a>
            </div>
        </div>
    </div>
</div>
@endsection