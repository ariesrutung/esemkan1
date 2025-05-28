@extends('wp-admin.layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pengaturan Halaman Web SMK Negeri 1 Manokwari</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pengaturan.update') }}" method="POST">
                            @csrf
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="row">
                                @foreach ($pages_settings as $key => $value)
                                <div class="col-md-6 mb-3">
                                    <label for="{{ $key }}" class="form-label">{{ ucfirst(str_replace('_', ' ', $key))
                                        }}</label>
                                    <input type="text" name="{{ $key }}" id="{{ $key }}" value="{{ $value }}"
                                        class="form-control">
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection