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
                                Data Galeri SMK Negeri 1 Manokwari
                            </div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalTambahGaleri">
                                    Tambah Data </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Tempat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galeri as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($item->gambar)
                                        <img src="{{ asset('themes/frontend/assets/img/galeri//' . $item->gambar) }}"
                                            alt="{{ $item->judul }}" width="60">
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->jam }}</td>
                                    <td>{{ $item->tempat }}</td>
                                    <td class="d-flex gap-2">
                                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#viewModal{{ $item->id }}">Lihat</button>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                            data-target="#editModal{{ $item->id }}">Edit</button>
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
<div class="modal fade" id="modalTambahGaleri" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="modalTambahGaleriLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.galeri_sekolah.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahGaleriLabel">Tambah Galeri</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" name="kategori" required>
                                <option selected>-- Pilih Kategori --</option>
                                <option value="kbm">Kegiatan Belajar Mengajar</option>
                                <option value="ekskul">Ekstrakurikuler</option>
                                <option value="uhb">Upacara & Hari Besar</option>
                                <option value="pp">Prestasi & Penghargaan</option>
                                <option value="ks">Kegiatan Sekolah</option>
                                <option value="kst">Kunjungan & Study Tour</option>
                                <option value="fs">Fasilitas Sekolah</option>
                                <option value="ekps">Event Khusus & Pentas Seni</option>
                                <option value="pscsr">Program Sekolah & CSR</option>
                                <option value="dokalumni">Dokumentasi Alumni</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="jam" class="form-label">Jam</label>
                            <input type="time" class="form-control" name="jam" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="tempat" class="form-label">Tempat</label>
                            <input type="text" class="form-control" name="tempat" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control-file" name="gambar" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
@foreach ($galeri as $item)
<div class="modal fade" id="hapusModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="hapusModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.galeri_sekolah.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus galeri berjudul <strong>{{ $item->judul }}</strong>?
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
@foreach ($galeri as $item)
<div class="modal fade" id="viewModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModal{{ $item->id }}Label">Detail Galeri</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Judul</th>
                        <td>{{ $item->judul }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $item->deskripsi }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{ $item->tanggal }}</td>
                    </tr>
                    <tr>
                        <th>Jam</th>
                        <td>{{ $item->jam }}</td>
                    </tr>
                    <tr>
                        <th>Tempat</th>
                        <td>{{ $item->tempat }}</td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td>
                            @if($item->gambar)
                            <img src="{{ asset('themes/frontend/assets/img/galeri/' . $item->gambar) }}" width="200">
                            @else
                            Tidak ada gambar
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal Edit -->
@foreach ($galeri as $item)
<div class="modal fade" id="editModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.galeri_sekolah.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Galeri</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{ $item->judul }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $item->deskripsi }}"
                                required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{ $item->tanggal }}"
                                required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Jam</label>
                            <input type="time" class="form-control" name="jam" value="{{ $item->jam }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Tempat</label>
                            <input type="text" class="form-control" name="tempat" value="{{ $item->tempat }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Gambar</label>
                            <input type="file" class="form-control-file" name="gambar" accept="image/*">
                            @if($item->gambar)
                            <div class="mt-2">
                                <img src="{{ asset('themes/frontend/assets/img/galeri/' . $item->gambar) }}"
                                    width="100">
                            </div>
                            @endif
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