<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Panel Admin | SMK Negeri 1 Manokwari</title>

    <link href="{{ asset('themes/frontend/assets/img/favicon.jpg') }}" rel="icon">
    <link href="{{ asset('themes/frontend/assets/img/apple-touch-icon.jpg') }}" rel="apple-touch-icon">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet"
        href="{{ asset('themes/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('themes/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('themes/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/backend/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('themes/backend/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('themes/backend/plugins/summernote/summernote-bs4.min.css') }}">
    <style>
        .gap-2 {
            gap: 3px !important;
        }

        .nav-sidebar>.nav-item .nav-icon {
            font-size: 1rem;
        }

        .nav-sidebar .nav-link p {
            font-size: 1rem;
        }

        table#example2 *,
        section.content * {
            font-size: 0.9rem;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('wp-admin.partials.topnavbar')

        <!-- Main Sidebar Container -->
        @include('wp-admin.partials.sidenavbar')

        <div class="content-wrapper">
            @if(empty($isErrorPage) || !$isErrorPage)
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{ $pageTitle ?? '' }}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active">{{ $pageTitle ?? '' }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            @endif

            @yield('content')
            <aside class="control-sidebar control-sidebar-dark">
            </aside>
        </div>
        @include('wp-admin.partials.footer')

        <script src="{{ asset('themes/backend/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
        </script>
        <script src="{{ asset('themes/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
        </script>
        <script src="{{ asset('themes/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('themes/backend/dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('themes/backend/plugins/select2/js/select2.full.min.js') }}"></script>

        <script src="{{ asset('themes/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

                $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "stateSave": true, // <--- Tambahkan ini
                });     
            });

            $('#modalTambahMapel').on('shown.bs.modal', function () {
                if (!$.fn.select2 || $('.select2').hasClass('select2-hidden-accessible')) return;

                $('.select2').select2({
                    dropdownParent: $('#modalTambahMapel'),
                    width: 'resolve'
                });
            });

            $('#uraian_singkat').summernote({
                height: 100
            });
        </script>
</body>

</html>