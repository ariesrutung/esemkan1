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
                                Data GTK SMK Negeri 1 Manokwari
                            </div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalTambahGTK">
                                    Tambah Data </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Foto</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jabatan</th>
                                    <th>NIP</th>
                                    <th>NUPTK</th>
                                    <th>No. WA</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gtk as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($item->foto)
                                        <img class="rounded-circle"
                                            src="{{ asset('themes/frontend/assets/img/gtk//' . $item->foto) }}"
                                            alt="{{ $item->nama_lengkap }}" width="60">
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>{{ $item->nip }}</td>
                                    <td>{{ $item->nuptk }}</td>
                                    <td>{{ $item->no_hp }}</td>
                                    <td>{{ $item->alamat }}</td>
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

<div class="modal fade" id="modalTambahGTK" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="modalTambahGTKLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.gt_kependidikan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahGTKLabel">Tambah GTK</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" required>
                                    <option value="">-- Pilih --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="no_hp" class="form-label">Nomor WA</label>
                                <input type="text" class="form-control" name="no_hp" required>
                            </div>

                            <div class="mb-3 col-md-6" id="input_nip">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" class="form-control" name="nip" required>
                            </div>

                            <div class="mb-3 col-md-6" id="input_nuptk">
                                <label for="nuptk" class="form-label">NUPTK</label>
                                <input type="text" class="form-control" name="nuptk" required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="foto">Unggah foto</label>
                                <input type="file" class="form-control-file" name="foto" id="foto" accept="image/*">
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

@foreach ($gtk as $item)
<div class="modal fade" id="hapusModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="hapusModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.gt_kependidikan.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data dari user <strong>{{ $item->nama }}</strong>?
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
@foreach ($gtk as $item)
<div class="modal fade" id="viewModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel{{ $item->id }}">Detail GTK</h5>
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
                        <td>{{ $item->jabatan }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $item->jenis_kelamin }}</td>
                    </tr>
                    <tr>
                        <th>NIP/NUPTK</th>
                        <td>
                            @if($item->nip)
                            {{ $item->nip }}
                            @elseif($item->nuptk)
                            {{ $item->nuptk }}
                            @else
                            -
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>No WA</th>
                        <td>{{ $item->no_hp }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $item->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Foto</th>
                        <td>
                            @if($item->foto)
                            <img src="{{ asset('themes/frontend/assets/img/gtk/' . $item->foto) }}" width="200">
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
@foreach ($gtk as $item)
<div class="modal fade" id="editModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.gt_kependidikan.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Ubah GTK</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap"
                                value="{{ $item->nama_lengkap }}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="{{ $item->jabatan }}">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki" {{ $item->jenis_kelamin == 'Laki-laki' ? 'selected' : ''
                                    }}>Laki-laki</option>
                                <option value="Perempuan" {{ $item->jenis_kelamin == 'Perempuan' ? 'selected' : ''
                                    }}>Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="no_hp" class="form-label">Nomor WA</label>
                            <input type="text" class="form-control" name="no_hp" value="{{ $item->no_hp }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control" name="nip" value="{{ $item->nip }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nuptk" class="form-label">NUPTK</label>
                            <input type="text" class="form-control" name="nuptk" value="{{ $item->nuptk }}" required>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $item->alamat }}" required>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="foto">Unggah foto</label>
                            <input type="file" class="form-control-file" name="foto" id="foto" accept="image/*">
                        </div>
                        <div class="mb-3 col-md-6">
                            @if($item->foto)
                            <div class="mt-2">
                                <img src="{{ asset('themes/frontend/assets/img/gtk/' . $item->foto) }}" width="100">
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