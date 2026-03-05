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

        <!-- TinyMCE -->
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: 250,
                menubar: false,
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
                    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | blocks | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
                setup: function (editor) {
                    editor.on('change', function () {
                        tinymce.triggerSave();
                    });
                }
            });
        </script>
        
        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(document).ready(function() {
                @if (session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: '{!! session('success') !!}',
                        showConfirmButton: false,
                        timer: 2000
                    });
                @endif

                @if ($errors->any())
                    let errorMessages = '';
                    @foreach ($errors->all() as $error)
                        errorMessages += '<li>{{ $error }}</li>';
                    @endforeach

                    Swal.fire({
                        icon: 'error',
                        title: 'Terdapat Kesalahan!',
                        html: '<ul style="text-align: left; margin-bottom: 0;">' + errorMessages + '</ul>',
                        confirmButtonText: 'Tutup',
                        confirmButtonColor: '#d33'
                    });
                @endif
                // Disable default HTML5 validation tooltip agar swal selalu muncul
                $('form').attr('novalidate', 'novalidate');

                // Validasi Client Side untuk mencegah loading lama & pesan lebih spesifik
                $('form').on('submit', function(e) {
                    if (typeof tinymce !== 'undefined') {
                        tinymce.triggerSave();
                    }

                    let isValid = true;
                    let errorMsg = '';

                    // Cek input required
                    $(this).find('input, textarea, select').filter('[required]').each(function() {
                        if (!$(this).val()) {
                            isValid = false;
                            // Cari label terdekat
                            let label = $(this).closest('div').find('label').first().text().replace('*', '').trim();
                            if (!label) label = $(this).attr('name');
                            
                            errorMsg += '<li>Field <b>' + label + '</b> harus diisi.</li>';
                        }
                    });

                    // Cek ukuran file (1MB untuk gambar, 5MB untuk PDF)
                    $(this).find('input[type="file"]').each(function() {
                        if (this.files && this.files[0]) {
                            let file = this.files[0];
                            let fileSize = file.size / 1024; // Dalam KB
                            
                            // Deteksi form input name atau mime type pdf
                            let isPdf = file.type === 'application/pdf' || $(this).attr('accept') === 'application/pdf';
                            let maxLimit = isPdf ? 5120 : 1024; // 5MB jika PDF, 1MB jika gambar

                            if (fileSize > maxLimit) {
                                isValid = false;
                                let label = $(this).closest('div').find('label').first().text().replace('*', '').trim();
                                if (!label) label = 'File';
                                let maxText = isPdf ? '5 MB' : '1 MB';
                                errorMsg += '<li>Ukuran <b>' + label + '</b> tidak boleh lebih dari ' + maxText + '.</li>';
                            }
                        }
                    });

                    if (!isValid) {
                        e.preventDefault(); // Stop submit ke server
                        Swal.fire({
                            icon: 'error',
                            title: 'Terdapat Kesalahan!',
                            html: '<ul style="text-align: left; margin-bottom: 0;">' + errorMsg + '</ul>',
                            confirmButtonText: 'Tutup',
                            confirmButtonColor: '#d33'
                        });
                    }
                });
            });
        </script>
        
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
        </script>
</body>

</html>