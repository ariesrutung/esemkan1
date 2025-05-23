@extends('wp-admin.layouts.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="col-md-2 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btn-sm">Tambah Data</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-section1-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-section1" type="button" role="tab" aria-controls="nav-section1"
                            aria-selected="true">Section 1</button>
                        <button class="nav-link" id="nav-section2-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-section2" type="button" role="tab" aria-controls="nav-section2"
                            aria-selected="false">Section 2</button>
                        <button class="nav-link" id="nav-section3-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-section3" type="button" role="tab" aria-controls="nav-section3"
                            aria-selected="false">Section 3</button>
                        <button class="nav-link" id="nav-section4-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-section4" type="button" role="tab" aria-controls="nav-section4"
                            aria-selected="false">Section 4</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-section1" role="tabpanel"
                        aria-labelledby="nav-section1-tab" tabindex="0">
                        <div class="row mt-5"></div>
                        <form method="POST" action="{{ route('home-settings.beranda') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="greeting" class="form-label">Greeting</label>
                                        <input type="text" class="form-control" name="greeting" id="greeting"
                                            value="{{ old('greeting', $settings['greeting'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="school_name" class="form-label">Nama Sekolah</label>
                                        <input type="text" class="form-control" name="school_name" id="school_name"
                                            value="{{ old('school_name', $settings['school_name'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="button" class="form-label">Link Button</label>
                                        <input type="text" class="form-control" name="button" id="button"
                                            value="{{ old('button', $settings['button'] ?? '') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="picture" class="form-label">Gambar</label>
                                        <input type="file" class="form-control" name="picture" id="picture">
                                        @if (!empty($settings['picture']))
                                        <div class="mt-2">
                                            <img src="{{ asset($settings['picture']) }}" alt="Gambar Saat Ini"
                                                width="150">
                                        </div> @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Update Data</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-section2" role="tabpanel" aria-labelledby="nav-section2-tab"
                        tabindex="0">
                        <form method="POST" action="{{ route('home-settings.benefit') }}">
                            @csrf
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ben_title" class="form-label">Judul Keunggulan</label>
                                        <input type="text" class="form-control" name="ben_title" id="ben_title"
                                            value="{{ $settings['ben_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ben_description" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" name="ben_description"
                                            id="ben_description" value="{{ $settings['ben_description'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ben_icon" class="form-label">Icon (e.g., bi bi-star)</label>
                                        <input type="text" class="form-control" name="ben_icon" id="ben_icon"
                                            value="{{ $settings['ben_icon'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ben_bgcolor" class="form-label">Warna Background</label>
                                        <input type="text" class="form-control" name="ben_bgcolor" id="ben_bgcolor"
                                            value="{{ $settings['ben_bgcolor'] ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Update Data</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-section3" role="tabpanel" aria-labelledby="nav-section3-tab"
                        tabindex="0">
                        <form method="POST" action="{{ route('home-settings.quote') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-5"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="quote" class="form-label">Quote</label>
                                        <input type="text" class="form-control" name="quote" id="quote"
                                            value="{{ $settings['quote'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="quote_by" class="form-label">Quote By</label>
                                        <input type="text" class="form-control" name="quote_by" id="quote_by"
                                            value="{{ $settings['quote_by'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="quote_title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="quote_title" id="quote_title"
                                            value="{{ $settings['quote_title'] ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="quote_picture" class="form-label">Picture</label>
                                        <input type="file" class="form-control" name="quote_picture" id="quote_picture">
                                        @if (!empty($settings['quote_picture']))
                                        <div class="mt-2">
                                            <img src="{{ asset($settings['quote_picture']) }}" alt="Quote Picture"
                                                height="100">
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success btn-sm">Update Data</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-section4" role="tabpanel" aria-labelledby="nav-section4-tab"
                        tabindex="0">
                        <form method="POST" action="{{ route('home-settings.programkeahlian') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="program_section_title">Judul Section</label>
                                <input type="text" class="form-control" name="program_section_title"
                                    value="{{ $settings['program_section_title'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="program_section_subtitle">Subjudul Section</label>
                                <textarea class="form-control"
                                    name="program_section_subtitle">{{ $settings['program_section_subtitle'] ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="program_1_title">Nama Jurusan</label>
                                <input type="text" class="form-control" name="program_1_title"
                                    value="{{ $settings['program_1_title'] ?? '' }}">
                            </div>

                            <div class="mb-3">
                                <label for="program_1_description">Deskripsi Jurusan</label>
                                <textarea class="form-control"
                                    name="program_1_description">{{ $settings['program_1_description'] ?? '' }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="program_1_image">Gambar Jurusan</label>
                                <input type="file" class="form-control" name="program_1_image">
                                @if (!empty($settings['program_1_image']))
                                <img src="{{ asset($settings['program_1_image']) }}" class="mt-2" width="150">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Cek apakah ada tab terakhir di localStorage
        const lastTab = localStorage.getItem('activeTab');
        if (lastTab) {
            const triggerEl = document.querySelector(`[data-bs-target="${lastTab}"]`);
            if (triggerEl) {
                const tab = new bootstrap.Tab(triggerEl);
                tab.show();
            }
        }

        // Simpan tab aktif ke localStorage saat berpindah tab
        const tabButtons = document.querySelectorAll('button[data-bs-toggle="tab"]');
        tabButtons.forEach(button => {
            button.addEventListener('shown.bs.tab', function (event) {
                const activeTab = event.target.getAttribute('data-bs-target');
                localStorage.setItem('activeTab', activeTab);
            });
        });
    });
</script>
@endsection