@extends('wp-admin.layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <i class="fas fa-table me-1"></i>
                                Data Jabatan pada SMK Negeri 1 Manokwari
                            </div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalTambahJabatan">
                                    Tambah Data </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Kategori Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jabatan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->nama_jabatan }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td class="d-flex gap-2">
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#viewModal{{ $item->id }}">Lihat</button>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#editModal{{ $item->id }}">Ubah</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#hapusModal{{ $item->id }}">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="modalTambahJabatan" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="modalTambahJabatanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.jabatan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahJabatanLabel">Tambah Jabatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="nama_lengkap" class="form-label">Nama Jabatan</label>
                                <input type="text" class="form-control" name="nama_lengkap" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                                <input type="text" class="form-control" name="nama_jabatan" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="kategori" class="form-label">Kategori Jabatan</label>
                                <select class="form-control" name="kategori" id="kategori" required>
                                    <option selected disabled>-- Pilih Jabatan --</option>
                                    <option value="Struktural (Manajerial)">Struktural (Manajerial)</option>
                                    <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                                    <option value="Fungsional Non-Guru">Fungsional Non-Guru</option>
                                    <option value="Jabatan Khusus SMK">Jabatan Khusus SMK</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


@foreach ($jabatan as $item)
<div class="modal fade" id="hapusModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="hapusModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.jabatan.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data jabatan <strong>{{ $item->nama
                        }}</strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


<!-- Modal View -->
@foreach ($jabatan as $item)
<div class="modal fade" id="viewModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel{{ $item->id }}">Detail Jabatan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Lengkap</th>
                        <td>{{ $item->nama_lengkap }}</td>
                    </tr>
                    <tr>
                        <th>Jabatan</th>
                        <td>{{ $item->nama_jabatan }}</td>
                    </tr>
                    <tr>
                        <th>Kategori Jabatan</th>
                        <td>{{ $item->kategori }}</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Edit -->
@foreach ($jabatan as $item)
<div class="modal fade" id="editModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.jabatan.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Ubah Jabatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="nama_lengkap" class="form-label">Nama Jabatan</label>
                            <input type="text" class="form-control" name="nama_lengkap"
                                value="{{ $item->nama_lengkap }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nama_jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="nama_jabatan"
                                value="{{ $item->nama_jabatan }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="kategori" class="form-label">Kategori Jabatan</label>
                            <select class="form-control" name="kategori" id="kategori" required>
                                <option selected disabled>-- Pilih Jabatan --</option>
                                <option value="Struktural (Manajerial)" {{ $item->kategori == 'Struktural (Manajerial)'
                                    ? 'selected' : '' }}>Struktural
                                    (Manajerial)</option>
                                <option value="Tenaga Kependidikan" {{ $item->kategori == 'Tenaga Kependidikan' ?
                                    'selected' : '' }}>Tenaga Kependidikan
                                </option>
                                <option value="Fungsional Non-Guru" {{ $item->kategori == 'Fungsional Non-Guru' ?
                                    'selected' : '' }}>Fungsional Non-Guru
                                </option>
                                <option value="Jabatan Khusus SMK" {{ $item->kategori == 'Jabatan Khusus SMK' ?
                                    'selected' : '' }}>Jabatan Khusus SMK
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection