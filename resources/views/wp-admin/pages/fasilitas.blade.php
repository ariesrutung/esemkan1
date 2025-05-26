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
                                Data Fasilitas SMK Negeri 1 Manokwari
                            </div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalTambahFasilitas">
                                    Tambah Data </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fasilitas as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($item->foto)
                                        <img src="{{ asset('themes/frontend/assets/img/fasilitas//' . $item->foto) }}"
                                            alt="{{ $item->judul }}" width="60">
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ $item->jumlah }}</td>
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
<div class="modal fade" id="modalTambahFasilitas" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="modalTambahFasilitasLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.fasilitas_sekolah.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahInformasiLabel">Tambah Fasilitas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="nama" class="form-label">Nama Fasilitas</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="jumlah" class="form-label">Jumlah Fasilitas</label>
                            <input type="number" class="form-control" name="jumlah" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="foto" class="form-label">Unggah Gambar</label>
                            <input type="file" class="form-control-file" name="foto" id="foto" accept="image/*">
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
@foreach ($fasilitas as $item)
<div class="modal fade" id="hapusModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="hapusModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.fasilitas_sekolah.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus fasilitas berjudul <strong>{{ $item->nama }}</strong>?
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
@foreach ($fasilitas as $item)
<div class="modal fade" id="viewModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahInformasiLabel">Detail Fasilitas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Judul</th>
                        <td>{{ $item->nama }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $item->deskripsi }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah</th>
                        <td>{{ $item->jumlah }}</td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td>
                            @if($item->foto)
                            <img src="{{ asset('themes/frontend/assets/img/fasilitas/' . $item->foto) }}" width="200">
                            @else
                            Tidak ada foto
                            @endif
                        </td>
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
@foreach ($fasilitas as $item)
<div class="modal fade" id="editModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.fasilitas_sekolah.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahInformasiLabel">Ubah Fasilitas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="nama" class="form-label">Nama Fasilitas</label>
                            <input type="text" class="form-control" name="nama" value="{{ $item->nama }}" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="{{ $item->deskripsi }}"
                                required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $item->jumlah }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="foto" class="form-label">Unggah Gambar</label>
                            <input type="file" class="form-control-file" name="foto" id="foto" accept="image/*">
                        </div>
                        <div class="mb-3 col-md-6">
                            @if($item->foto)
                            <div class="mt-2">
                                <img src="{{ asset('themes/frontend/assets/img/fasilitas/' . $item->foto) }}"
                                    width="100">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-sm btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection