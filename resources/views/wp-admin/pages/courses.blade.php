@extends('wp-admin.layouts.app')
@section('content')

<section id="halamanMapel" class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <i class="fas fa-table me-1"></i>
                                Data Materi Jurusan Per Semester
                            </div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalTambahCourse">
                                    Tambah Materi </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Kelas</th>
                                    <th>Semester</th>
                                    <th>Judul Materi</th>
                                    <th>Uraian Singkat</th>
                                    <th>Ketua Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('themes/frontend/assets/img/courses/' . ($item->gambar ?? 'default.png')) }}"
                                            alt="{{ $item->judul_materi }}" width="60">
                                    </td>
                                    <td>{{ $item->kelas }}</td>
                                    <td>{{ $item->semester }}</td>
                                    <td>{{ $item->judul_materi }}</td>
                                    <td>{{ $item->uraian_singkat }}</td>
                                    <td>{{ $item->nama_ketua_jurusan }}</td>
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

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambahCourse" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="modalTambahCourseLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.courses.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahCourseLabel">Tambah Materi</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="judul_materi" class="form-label">Judul Materi</label>
                            <input type="text" class="form-control" name="judul_materi" required>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="uraian_singkat" class="form-label">Uraian Singkat Materi</label>
                            <textarea name="uraian_singkat" id="uraian_singkat"></textarea>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-control" name="kelas" id="kelas" required>
                                <option selected>-- Pilih Kelas --</option>
                                <option value="X">Kelas X</option>
                                <option value="XI">Kelas XI</option>
                                <option value="XII">Kelas XII</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-control" name="semester" id="semester" required>
                                <option selected>-- Pilih Semester --</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nama_ketua_jurusan" class="form-label">Ketua Jurusan</label>
                            <select class="form-control" name="nama_ketua_jurusan" id="nama_ketua_jurusan" required>
                                <option selected>-- Pilih Ketua Jurusan --</option>
                                @foreach($kepalaJurusan as $item)
                                <option value="{{ $item->nama_lengkap }}">{{ $item->nama_lengkap }} - {{ $item->jurusan
                                    }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control-file" name="gambar" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
@foreach ($courses as $item)
<div class="modal fade" id="hapusModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="hapusModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.courses.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus materi berjudul <strong>{{ $item->judul_materi }}</strong>?
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
@foreach ($courses as $item)
<div class="modal fade" id="viewModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahCourseLabel">Detail Mata Pelajaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Gambar</th>
                        <td>
                            <img src="{{ asset('themes/frontend/assets/img/courses/' . ($item->gambar ?? 'default.png')) }}"
                                alt="{{ $item->judul_materi }}" width="60">
                        </td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>{{ $item->kelas }}</td>
                    </tr>
                    <tr>
                        <th>Semester</th>
                        <td>{{ $item->semester }}</td>
                    </tr>
                    <tr>
                        <th>Judul Materi</th>
                        <td>{{ $item->judul_materi }}</td>
                    </tr>
                    <tr>
                        <th>Uraian Singkat</th>
                        <td>{{ $item->uraian_singkat }}</td>
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

@foreach ($courses as $item)
<div class="modal fade" id="editModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.courses.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Ubah Mata Pelajaran</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="judul_materi" class="form-label">Judul Materi</label>
                            <input type="text" class="form-control" name="judul_materi"
                                value="{{ $item->judul_materi }}" required>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="uraian_singkat" class="form-label">Uraian Singkat Materi</label>
                            <textarea name="uraian_singkat"
                                id="edit_uraian_singkat_{{ $item->id }}">{{ $item->uraian_singkat }}</textarea>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-control" name="kelas" id="kelas" required>
                                <option selected>-- Pilih Kelas --</option>
                                <option value="X" {{ $item->kelas == 'X' ? 'selected' : '' }}>Kelas X</option>
                                <option value="XI" {{ $item->kelas == 'XI' ? 'selected' : '' }}>Kelas XI</option>
                                <option value="XII" {{ $item->kelas == 'XII' ? 'selected' : '' }}>Kelas XII</option>
                            </select>
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-control" name="semester" id="semester" required>
                                <option selected>-- Pilih Semester --</option>
                                <option value="1" {{ $item->semester == '1' ? 'selected' : '' }}>Semester 1</option>
                                <option value="2" {{ $item->semester == '2' ? 'selected' : '' }}>Semester 2</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nama_ketua_jurusan" class="form-label">Ketua Jurusan</label>
                            <select class="form-control" name="nama_ketua_jurusan" id="nama_ketua_jurusan" required>
                                <option selected>-- Pilih Ketua Jurusan --</option>
                                @foreach($kepalaJurusan as $kj)
                                <option value="{{ $kj->nama_lengkap }}" {{ $item->nama_ketua_jurusan ==
                                    $kj->nama_lengkap ? 'selected' : '' }}>
                                    {{ $kj->nama_lengkap }} - {{ $kj->jurusan }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="gambar">Unggah Gambar</label>
                            <input type="file" class="form-control-file" name="gambar" id="gambar" accept="image/*">
                        </div>
                        <div class="mb-3 col-md-6">
                            <div class="mt-2">
                                <img src="{{ asset('themes/frontend/assets/img/courses/' . ($item->gambar ?? 'default.png')) }}"
                                    width="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script>
    document.addEventListener("DOMContentLoaded", function () {
        @foreach ($courses as $item)
            $('#edit_uraian_singkat_{{ $item->id }}').summernote({
                height: 100
            });
        @endforeach
    });
</script>

@endsection