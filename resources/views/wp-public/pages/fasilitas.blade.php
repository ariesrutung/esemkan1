@extends('wp-public.layouts.app')
@section('content')

<section id="campus-facilities mt-5" class="campus-facilities section">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="intro-row">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="intro-content">
                        <h2 class="fw-bold">{{ $pages_settings['fasilitas_title'] }}</h2>
                        <p class="lead mt-4">{{ $pages_settings['fasilitas_short_desciption'] }}</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="intro-image-container">
                        <div class="intro-image main-image">
                            <img src="{{ asset('themes/frontend/assets/img/fasilitas/' . ($pages_settings['fasilitas_gambar_1'] ?? '-')) }}"
                                alt="Tampak Depan Sekolah" class="img-fluid rounded">
                        </div>
                        <div class="intro-image accent-image">
                            <img src="{{ asset('themes/frontend/assets/img/fasilitas/' . ($pages_settings['fasilitas_gambar_2'] ?? '-')) }}"
                                alt="Halaman Tengah Sekolah" class="img-fluid rounded">
                        </div>
                        <div class="tour-button">
                            <a href="#" class="btn-tour"><i class="bi bi-play-circle-fill"></i> Virtual Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="facilities-tabs" data-aos="fade-up" data-aos-delay="200">
            <div class="overflow-auto">
                <ul class="nav nav-tabs flex-nowrap justify-content-start p-1" role="tablist"
                    style="white-space: nowrap; overflow: auto;">
                    @foreach($prt_fasilitas as $index => $item)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $index == 0 ? 'active' : '' }}" id="tab-{{ $item->id }}"
                            data-bs-toggle="tab" data-bs-target="#tabcontent-{{ $item->id }}" type="button" role="tab"
                            aria-controls="tabcontent-{{ $item->id }}"
                            aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                            {{ $item->nama }}
                        </button>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="tab-content">
                @foreach($prt_fasilitas as $index => $item)
                <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="tabcontent-{{ $item->id }}"
                    role="tabpanel" aria-labelledby="tab-{{ $item->id }}">
                    <div class="row gy-4">
                        <div class="col-md-7" data-aos="fade-right" data-aos-delay="100">
                            <div class="facility-highlight">
                                <div class="facility-slider">
                                    <div class="facility-slide">
                                        <img src="{{ asset('themes/frontend/assets/img/fasilitas/' . $item->foto) }}"
                                            alt="{{ $item->nama }}" class="img-fluid rounded">
                                        <div class="slide-caption">{{ $item->nama }}</div>
                                    </div>
                                </div>
                                <div class="facility-description">
                                    <h3>{{ $item->nama }}</h3>
                                    <p>{{ $item->deskripsi ?? 'Deskripsi belum tersedia.' }}</p>
                                    <ul class="feature-list">
                                        <li><i class="bi bi-check-circle-fill"></i> Jumlah: {{ $item->jumlah }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5" data-aos="fade-left" data-aos-delay="200">
                            <div class="facility-cards">
                                <div class="facility-card">
                                    <div class="icon-container">
                                        <i class="bi bi-info-circle"></i>
                                    </div>
                                    <h4>Informasi Fasilitas</h4>
                                    <p>{{ $item->deskripsi ?? 'Deskripsi tambahan belum tersedia.' }}</p>
                                    <span class="info-badge"><i class="bi bi-building"></i> {{ $item->jumlah }}
                                        unit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@endsection