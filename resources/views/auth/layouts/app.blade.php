<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | SMK Negeri 1 Manokwari</title>
    <link href="{{ asset('themes/frontend/assets/img/favicon.jpg') }}" rel="icon">
    <link href="{{ asset('themes/frontend/assets/img/apple-touch-icon.jpg') }}" rel="apple-touch-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('themes/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/backend/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        @yield('content')
    </div>
    <script src="{{ asset('themes/backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('themes/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/backend/dist/js/adminlte.min.js') }}"></script>
</body>

</html>