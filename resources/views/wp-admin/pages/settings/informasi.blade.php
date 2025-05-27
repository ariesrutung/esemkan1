<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.informasi.update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        @foreach ($section1 as $key => $value)
                                        <div class="col-md-6 mb-3">
                                            <label for="{{ $key }}" class="form-label">
                                                {{ ucfirst(str_replace('_', ' ', $key)) }}
                                            </label>
                                            <input type="text" name="{{ $key }}" id="{{ $key }}" value="{{ $value }}"
                                                class="form-control">
                                        </div>
                                        @endforeach
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Pengaturan Halaman
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>