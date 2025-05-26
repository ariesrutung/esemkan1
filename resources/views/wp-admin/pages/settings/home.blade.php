@extends('wp-admin.layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pengaturan Halaman Beranda</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-10 px-5">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-Section1" role="tabpanel"
                                        aria-labelledby="v-pills-Section1-tab">
                                        <div class="row">
                                            <form action="{{ route('admin.home-section1.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    @foreach ($section1 as $key => $value)
                                                    <div class="col-md-6 mb-3">
                                                        <label for="{{ $key }}" class="form-label">
                                                            {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                        </label>
                                                        <input type="text" name="{{ $key }}" id="{{ $key }}"
                                                            value="{{ $value }}" class="form-control">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Section
                                                    1</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Section2" role="tabpanel"
                                        aria-labelledby="v-pills-Section2-tab">
                                        <div class="row">
                                            <form action="{{ route('admin.home-section2.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    @foreach ($section2 as $key => $value)
                                                    <div class="col-md-6 mb-3">
                                                        <label for="{{ $key }}" class="form-label">
                                                            {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                        </label>
                                                        <input type="text" name="{{ $key }}" id="{{ $key }}"
                                                            value="{{ $value }}" class="form-control">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Section
                                                    1</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Section3" role="tabpanel"
                                        aria-labelledby="v-pills-Section3-tab">
                                        <div class="row">
                                            <form action="{{ route('admin.home-section3.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    @foreach ($section3 as $key => $value)
                                                    <div class="col-md-6 mb-3">
                                                        <label for="{{ $key }}" class="form-label">
                                                            {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                        </label>
                                                        <input type="text" name="{{ $key }}" id="{{ $key }}"
                                                            value="{{ $value }}" class="form-control">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Section
                                                    1</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Section4" role="tabpanel"
                                        aria-labelledby="v-pills-Section4-tab">
                                        <div class="row">
                                            <form action="{{ route('admin.home-section4.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    @foreach ($section4 as $key => $value)
                                                    <div class="col-md-6 mb-3">
                                                        <label for="{{ $key }}" class="form-label">
                                                            {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                        </label>
                                                        <input type="text" name="{{ $key }}" id="{{ $key }}"
                                                            value="{{ $value }}" class="form-control">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Section
                                                    1</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Section5" role="tabpanel"
                                        aria-labelledby="v-pills-Section5-tab">
                                        <div class="row">
                                            <form action="{{ route('admin.home-section5.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    @foreach ($section5 as $key => $value)
                                                    <div class="col-md-6 mb-3">
                                                        <label for="{{ $key }}" class="form-label">
                                                            {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                        </label>
                                                        <input type="text" name="{{ $key }}" id="{{ $key }}"
                                                            value="{{ $value }}" class="form-control">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Section
                                                    1</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Section6" role="tabpanel"
                                        aria-labelledby="v-pills-Section6-tab">
                                        <div class="row">
                                            <form action="{{ route('admin.home-section6.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    @foreach ($section6 as $key => $value)
                                                    <div class="col-md-6 mb-3">
                                                        <label for="{{ $key }}" class="form-label">
                                                            {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                        </label>
                                                        <input type="text" name="{{ $key }}" id="{{ $key }}"
                                                            value="{{ $value }}" class="form-control">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Section
                                                    1</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-Section7" role="tabpanel"
                                        aria-labelledby="v-pills-Section7-tab">
                                        <div class="row">
                                            <form action="{{ route('admin.home-section7.update') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    @foreach ($section7 as $key => $value)
                                                    <div class="col-md-6 mb-3">
                                                        <label for="{{ $key }}" class="form-label">
                                                            {{ ucfirst(str_replace('_', ' ', $key)) }}
                                                        </label>
                                                        <input type="text" name="{{ $key }}" id="{{ $key }}"
                                                            value="{{ $value }}" class="form-control">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan Section
                                                    1</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active border-0 mb-2" id="v-pills-Section1-tab"
                                        data-toggle="pill" data-target="#v-pills-Section1" type="button" role="tab"
                                        aria-controls="v-pills-Section1" aria-selected="true">Section I</button>
                                    <button class="nav-link border-0 mb-2" id="v-pills-Section2-tab" data-toggle="pill"
                                        data-target="#v-pills-Section2" type="button" role="tab"
                                        aria-controls="v-pills-Section2" aria-selected="false">Section II</button>
                                    <button class="nav-link border-0 mb-2" id="v-pills-Section3-tab" data-toggle="pill"
                                        data-target="#v-pills-Section3" type="button" role="tab"
                                        aria-controls="v-pills-Section3" aria-selected="false">Section III</button>
                                    <button class="nav-link border-0 mb-2" id="v-pills-Section4-tab" data-toggle="pill"
                                        data-target="#v-pills-Section4" type="button" role="tab"
                                        aria-controls="v-pills-Section4" aria-selected="false">Section IV</button>
                                    <button class="nav-link border-0 mb-2" id="v-pills-Section5-tab" data-toggle="pill"
                                        data-target="#v-pills-Section5" type="button" role="tab"
                                        aria-controls="v-pills-Section5" aria-selected="false">Section V</button>
                                    <button class="nav-link border-0 mb-2" id="v-pills-Section6-tab" data-toggle="pill"
                                        data-target="#v-pills-Section6" type="button" role="tab"
                                        aria-controls="v-pills-Section6" aria-selected="false">Section VI</button>
                                    <button class="nav-link border-0 mb-2" id="v-pills-Section7-tab" data-toggle="pill"
                                        data-target="#v-pills-Section7" type="button" role="tab"
                                        aria-controls="v-pills-Section7" aria-selected="false">Section VII</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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