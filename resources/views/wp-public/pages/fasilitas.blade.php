@extends('wp-public.layouts.app')
@section('content')

<section id="campus-facilities mt-5" class="campus-facilities section">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="intro-row">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="intro-content">
                        <h2 class="fw-bold">Experience Our Campus</h2>
                        <p class="lead">Discover state-of-the-art facilities designed to inspire learning and growth</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin scelerisque magna vitae eros
                            faucibus, vitae finibus massa pharetra. Nullam egestas dolor in condimentum faucibus.</p>
                        <div class="stats-container">
                            <div class="stat-item">
                                <span class="stat-number">120+</span>
                                <span class="stat-label">Acres</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">45</span>
                                <span class="stat-label">Buildings</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">15k+</span>
                                <span class="stat-label">Students</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="intro-image-container">
                        <div class="intro-image main-image">
                            <img src="{{ asset('themes/frontend/assets/img/education/campus-1.webp') }}"
                                alt="Main Campus" class="img-fluid rounded">
                        </div>
                        <div class="intro-image accent-image">
                            <img src="{{ asset('themes/frontend/assets/img/education/campus-2.webp') }}"
                                alt="Campus Feature" class="img-fluid rounded">
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
                            <i class="bi bi-building"></i> {{ $item->nama }}
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

        <div class="campus-gallery-section" data-aos="fade-up" data-aos-delay="300">

            <div class="gallery-grid">
                <div class="gallery-item large" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('themes/frontend/assets/img/education/campus-3.webp') }}" alt="Library"
                        class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Central Library</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('themes/frontend/assets/img/education/campus-8.webp') }}" alt="Student Center"
                        class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Student Center</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('themes/frontend/assets/img/education/campus-9.webp') }}" alt="Dormitory"
                        class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Dormitories</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('themes/frontend/assets/img/education/campus-10.webp') }}" alt="Study Areas"
                        class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Study Areas</h4>
                    </div>
                </div>
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500">
                    <img src="{{ asset('themes/frontend/assets/img/education/campus-5.webp') }}" alt="Sports Complex"
                        class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Sports Complex</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection