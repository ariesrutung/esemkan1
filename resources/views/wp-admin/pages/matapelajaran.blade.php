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
                                Data Mata Pelajaran
                            </div>
                            <div class="col-md-2 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modalTambahMapel">
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
                                    <th>Kode</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mapel as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kode }}</td>
                                    <td>{{ $item->deskripsi }}</td>
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
<div class="modal fade" id="modalTambahMapel" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="modalTambahMapelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.matapelajaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahMapelLabel">Tambah Mata Pelajaran</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-8">
                            <label for="nama" class="form-label">Nama Mata Pelajaran</label>
                            <input type="text" id="nama" name="nama" class="form-control">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="kode" class="form-label">Kode Mata Pelajaran</label>
                            <input type="text" id="kode" name="kode" class="form-control" readonly>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="deskripsi" class="form-label">Deskripsi Mata Pelajaran</label>
                            <input type="text" class="form-control" name="deskripsi" required>
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
@foreach ($mapel as $item)
<div class="modal fade" id="hapusModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="hapusModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.matapelajaran.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusModalLabel{{ $item->id }}">Konfirmasi Hapus</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus pkl berjudul <strong>{{ $item->nama }}</strong>?
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
@foreach ($mapel as $item)
<div class="modal fade" id="viewModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="viewModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahMapelLabel">Detail Mata Pelajaran</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Mata Pelajaran</th>
                        <td>{{ $item->nama }}</td>
                    </tr>
                    <tr>
                        <th>Kode</th>
                        <td>{{ $item->kode }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $item->deskripsi }}</td>
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

@foreach ($mapel as $item)
<div class="modal fade" id="editModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form action="{{ route('admin.matapelajaran.update', $item->id) }}" method="POST"
                enctype="multipart/form-data">
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
                        <div class="mb-3 col-md-8">
                            <label for="nama{{ $item->id }}" class="form-label">Nama Mata Pelajaran</label>
                            <input type="text" id="nama{{ $item->id }}" name="nama" class="form-control"
                                value="{{ old('nama', $item->nama) }}" required>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="kode{{ $item->id }}" class="form-label">Kode Mata Pelajaran</label>
                            <input type="text" id="kode{{ $item->id }}" name="kode" class="form-control"
                                value="{{ old('kode', $item->kode) }}" readonly>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="deskripsi{{ $item->id }}" class="form-label">Deskripsi Mata Pelajaran</label>
                            <input type="text" id="deskripsi{{ $item->id }}" class="form-control" name="deskripsi"
                                value="{{ old('deskripsi', $item->deskripsi) }}" required>
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


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#nama').on('input', function () {
            const nama = $(this).val();
            if (nama.length > 1) {
                $.ajax({
                    url: "{{ route('admin.get-kode-mapel') }}",
                    type: 'GET',
                    data: { nama: nama },
                    success: function (response) {
                        $('#kode').val(response.kode);
                    }
                });
            } else {
                $('#kode').val('');
            }
        });
    });
    
</script>

@endsection