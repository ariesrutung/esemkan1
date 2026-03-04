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

                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="settingsTab" role="tablist">
                                        @foreach ($groups as $label => $groupData)
                                        <li class="nav-item">
                                            <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                                id="tab-{{ Str::slug($label) }}-tab" data-toggle="pill"
                                                href="#tab-{{ Str::slug($label) }}" role="tab"
                                                aria-controls="tab-{{ Str::slug($label) }}"
                                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                                {{ $label }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="settingsTabContent">
                                        @foreach ($groups as $label => $groupData)
                                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                            id="tab-{{ Str::slug($label) }}" role="tabpanel"
                                            aria-labelledby="tab-{{ Str::slug($label) }}-tab">
                                            <div class="row">
                                                @foreach ($groupData['settings'] as $setting)
                                                <div class="col-md-6 mb-3">
                                                    <label for="{{ $setting->key }}" class="form-label">
                                                        {{ ucfirst(str_replace('_', ' ', str_replace($groupData['prefix'],
                                                        '', $setting->key))) }}
                                                    </label>
                                                    <textarea name="{{ $setting->key }}" id="{{ $setting->key }}"
                                                        class="form-control"
                                                        rows="3">{{ $setting->value }}</textarea>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection