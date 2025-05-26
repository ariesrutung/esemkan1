<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Panel Admin | Web SMK Negeri 1 Manokwari</title>
    <link href="{{ asset('themes/frontend/assets/img/favicon.jpg') }}" rel="icon">
    <link href="{{ asset('themes/frontend/assets/img/apple-touch-icon.jpg') }}" rel="apple-touch-icon">

    <link href="{{ asset('themes/backend/css/sb-admin-2.min.css') }}" rel="stylesheet" />
</head>

<body class="bg-secondary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('themes/backend/js/sb-admin-2.min.js') }}"></script>
</body>

</html>