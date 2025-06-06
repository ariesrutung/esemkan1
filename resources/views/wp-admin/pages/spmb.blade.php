@extends('wp-admin.layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sistem Penerimaan Peserta Didik Baru</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.spmb.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Judul dan Subjudul Halaman SPMB</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" name="title" id="title"
                                                        value="{{ $spmb_settings['spmb_title'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                    <input name="deskripsi" id="deskripsi" class="form-control"
                                                        value="{{ $spmb_settings['spmb_short_desciption'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <label for="message" class="form-label">Message</label>
                                                    <input name="message" id="message" class="form-control"
                                                        value="{{ $spmb_settings['spmb_message'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-6 mt-3">
                                                    <label for="spmb_button_tile" class="form-label">Nama Button</label>
                                                    <input name="spmb_button_tile" id="spmb_button_tile"
                                                        class="form-control"
                                                        value="{{ $spmb_settings['spmb_button_tile'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <label for="spmb_syarat_title" class="form-label">Judul
                                                        Persyaratan</label>
                                                    <input type="text" name="spmb_syarat_title" id="spmb_syarat_title"
                                                        value="{{ $spmb_settings['spmb_syarat_title'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Persyaratan Pendaftaran</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="syarat_1" class="form-label">Syarat 1</label>
                                                    <input type="text" name="syarat_1" id="syarat_1"
                                                        value="{{ $spmb_settings['spmb_syarat_1'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="syarat_1_desk" class="form-label">Deskripsi Syarat
                                                        1</label>
                                                    <input name="syarat_1_desk" id="syarat_1_desk" class="form-control"
                                                        value="{{ $spmb_settings['spmb_syarat_1_desk'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="syarat_2" class="form-label">Syarat 2</label>
                                                    <input type="text" name="syarat_2" id="syarat_2"
                                                        value="{{ $spmb_settings['spmb_syarat_2'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="syarat_2_desk" class="form-label">Deskripsi Syarat
                                                        2</label>
                                                    <input name="syarat_2_desk" id="syarat_2_desk" class="form-control"
                                                        value="{{ $spmb_settings['spmb_syarat_2_desk'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="syarat_3" class="form-label">Syarat 3</label>
                                                    <input type="text" name="syarat_3" id="syarat_3"
                                                        value="{{ $spmb_settings['spmb_syarat_3'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="syarat_3_desk" class="form-label">Deskripsi Syarat
                                                        3</label>
                                                    <input name="syarat_3_desk" id="syarat_3_desk" class="form-control"
                                                        value="{{ $spmb_settings['spmb_syarat_3_desk'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="syarat_4" class="form-label">Syarat 4</label>
                                                    <input type="text" name="syarat_4" id="syarat_4"
                                                        value="{{ $spmb_settings['spmb_syarat_4'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="syarat_4_desk" class="form-label">Deskripsi Syarat
                                                        4</label>
                                                    <input name="syarat_4_desk" id="syarat_4_desk" class="form-control"
                                                        value="{{ $spmb_settings['spmb_syarat_4_desk'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="syarat_5" class="form-label">Syarat 5</label>
                                                    <input type="text" name="syarat_5" id="syarat_5"
                                                        value="{{ $spmb_settings['spmb_syarat_5'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="syarat_5_desk" class="form-label">Deskripsi Syarat
                                                        5</label>
                                                    <input name="syarat_5_desk" id="syarat_5_desk" class="form-control"
                                                        value="{{ $spmb_settings['spmb_syarat_5_desk'] ?? '-' }}">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="syarat_6" class="form-label">Syarat 6</label>
                                                    <input type="text" name="syarat_6" id="syarat_6"
                                                        value="{{ $spmb_settings['spmb_syarat_6'] ?? '-' }}"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="syarat_6_desk" class="form-label">Deskripsi Syarat
                                                        6</label>
                                                    <input name="syarat_6_desk" id="syarat_6_desk" class="form-control"
                                                        value="{{ $spmb_settings['spmb_syarat_6_desk'] ?? '-' }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Infromasi Tambahan</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="mb-3 col-md-12">
                                                            <label for="gbr_brosur" class="form-label">Unggah
                                                                Gambar</label>
                                                            <input type="file" class="form-control-file"
                                                                name="gbr_brosur" id="gbr_brosur" accept="image/*">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="lokasi" class="form-label">Lokasi
                                                                Pendaftaran</label>
                                                            <input name="lokasi" id="lokasi" class="form-control"
                                                                value="{{ $spmb_settings['spmb_lokasi'] ?? '-' }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="no_wa" class="form-label">Contak
                                                                Person</label>
                                                            <input name="no_wa" id="no_wa" class="form-control"
                                                                value="{{ $spmb_settings['spmb_cp_wa'] ?? '-' }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3 col-md-6">
                                                        @if(!empty($spmb_settings['gbr_brosur']))
                                                        <label class="form-label d-block">Gambar Saat Ini</label>
                                                        <img src="{{ asset('themes/frontend/assets/img/spmb/' . $spmb_settings['spmb_gbr_brosur']) }}"
                                                            width="150" class="img-thumbnail">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Simpan Pengaturan
                                        Halaman</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection