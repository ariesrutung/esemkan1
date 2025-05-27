@extends('wp-public.layouts.app')
@section('content')
<style>
    .students-life .life-categories .category-card .icon-container {
        color: #2b378f !important;
    }

    .students-life .life-categories .category-card .icon-container:hover {
        color: #fff !important;
    }

    .btn-view-all {
        display: inline-block;
        background-color: #2b378f;
        color: #fff;
        font-weight: 600;
        padding: 0.75rem 2rem;
        border-radius: 50px;
        transition: 0.3s;
        border: 0;
    }

    .btn-view-all:hover {
        background-color: #49549e;
    }
</style>
<section id="hero" class="hero section dark-background">
    <div class="hero-container">
        <img src="{{ asset('themes/frontend/assets/img/' . ($pages_settings['home_section2_picture_1'] ?? '-')) }}"
            alt="SMK Negeri 1 Manokwari" class="video-background">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="100">
                    <div class="hero-content text-center">
                        <h4 class="fst-italic">{{ $pages_settings['home_section1_greetings'] ?? '-' }}</h4>
                        <h1>{{ $identities['nama'] ?? '-' }}</h1>
                        <h5></h5>
                        <p>{{ $pages_settings['home_section1_tagline'] ?? '-' }}</p>
                        <div class="cta-buttons d-flex justify-content-center">
                            <a href="{{ ('/spmb') }}" class="btn-primary">{{
                                $pages_settings['home_section1_button_name'] ?? '-' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="event-ticker">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12 border-end border-start border-primary">
                    <marquee behavior="scroll" direction="left">
                        {{ $pages_settings['home_section1_running_text'] ?? '-' }}
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row mb-5">
            <div class="col-lg-6 pe-lg-5" data-aos="fade-right" data-aos-delay="200">
                <h2 class="display-6 fw-bold mb-4">{{ $pages_settings['home_section2_title'] ?? '-' }} <span>{{
                        $identities['nama'] ?? '' }}</span> </h2>
                <p class="mb-4">{{ $pages_settings['home_section2_sambutan'] ?? '-' }}</p>

                <div class="d-flex align-items-center mt-4 signature-block">
                    <div class="ms-0">
                        <p class="mb-0 fw-bold">{{ $pages_settings['home_section2_writer'] ?? '-' }}</p>
                        <p class="mb-0 text-muted">{{ $pages_settings['home_section2_jabatan'] ?? '-' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <div class="image-stack">
                    <div class="image-stack-item image-stack-item-top" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('themes/frontend/assets/img/' . ($pages_settings['home_section2_picture_1'] ?? '-')) }}"
                            alt="Campus Life" class="img-fluid rounded-4 shadow-lg">
                    </div>
                    <div class="image-stack-item image-stack-item-bottom" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('themes/frontend/assets/img/' . ($pages_settings['home_section2_picture_2'] ?? '-')) }}"
                            alt="Students" class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </div>

        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="stats-overview" data-aos="fade-right" data-aos-delay="200">
                            <h2 class="stats-title">{{ $pages_settings['home_section3_title'] ?? '-' }}</h2>
                            <p class="stats-description">{{ $pages_settings['home_section3_subtitle']?? '-' }}
                            </p>
                            <div class="stats-cta">
                                <a href="{{ ('/program-keahlian') }}" class="btn btn-primary">{{
                                    $pages_settings['home_section3_button1_name']?? '-' }}</a>
                                <a href="{{ ('/spmb') }}" class="btn btn-outline">{{
                                    $pages_settings['home_section3_button2_name']??
                                    '-' }}</a>
                            </div>
                        </div>
                    </div>
                    @php
                    $benefits = [];
                    for ($i = 1; $i <= 4; $i++) { $benefits[]=[ 'icon'=>
                        $pages_settings["home_section3_benefit{$i}_icon"] ?? 'bi
                        bi-circle',
                        'title' => $pages_settings["home_section3_benefit{$i}_title"] ?? '-',
                        'subtitle' => $pages_settings["home_section3_benefit{$i}_subtitle"] ?? '-',
                        ];
                        }
                        @endphp

                        <div class="col-lg-6">
                            <div class="row g-4">
                                @foreach($benefits as $index => $benefit)
                                <div class="col-md-6">
                                    <div class="stats-card" data-aos="zoom-in"
                                        data-aos-delay="{{ 300 + ($index * 100) }}">
                                        <div class="stats-icon">
                                            @if(Str::startsWith($benefit['icon'], 'bi '))
                                            <i class="{{ $benefit['icon'] }}"></i>
                                            @else
                                            <img src="{{ asset($benefit['icon']) }}" alt="icon"
                                                style="width: 40px; height: 40px;">
                                            @endif
                                        </div>
                                        <div class="stats-label">{{ $benefit['title'] }}</div>
                                        <p class="stats-description">{{ $benefit['subtitle'] }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section id="featured-programs" class="featured-programs section">
    <div class="container section-title" data-aos="fade-up">
        <h2>{{ $pages_settings['home_section4_title'] ?? '-' }}</h2>
        <p>{{ $pages_settings['home_section4_subtitle'] ?? '-' }}</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row g-4 isotope-container">
                @foreach ($jurusan as $item)
                <div class="col-lg-6 isotope-item filter-bachelor" data-aos="zoom-in" data-aos-delay="100">
                    <div class="program-item">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="program-image-wrapper">
                                    <img src="{{ asset('themes/frontend/assets/img/program-studi/' . $item->gambar) }}"
                                        alt="{{ $item->nama }}" class="img-fluid" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="program-content">
                                    <h3>{{ $item->nama }}</h3>
                                    <p>{{ $item->deskripsi }}</p>
                                    <a href="#" class="program-btn"><span>Selengkapnya</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-5">
                <a href="{{ ('/program-keahlian') }}" class="btn-view-all">{{
                    $pages_settings['home_section4_button_title'] ?? '-'
                    }}</a>
            </div>
        </div>
    </div>
</section>

<section id="students-life" class="students-life section bg-dark">
    <div class="container section-title" data-aos="fade-up">
        <h2 class="text-light">{{ $pages_settings['home_section5_title'] ?? '-' }}</h2>
        <p class="text-light">{{ $pages_settings['home_section5_subtitle'] ?? '-' }}</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="life-categories mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">{{ $pages_settings['home_section5_murid'] ??
                            '-' }}</p>
                        <h4>Murid</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">{{ $pages_settings['home_section5_guru'] ??
                            '-' }}</p>
                        <h4>Guru</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">{{ $pages_settings['home_section5_tendik'] ??
                            '-' }}</p>
                        <h4>Tenaga Kependidikan</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">{{ $pages_settings['home_section5_rombel'] ??
                            '-' }}</p>
                        <h4>Rombel</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="students-life" class="students-life section">
    <div class="container section-title pb-2" data-aos="fade-up">
        <h2>{{ $pages_settings['home_section6_title'] ?? '-' }}</h2>
        <p>{{ $pages_settings['home_section6_subtitle'] ?? '-' }}</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="students-life-gallery mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row g-3">
                @foreach($galeri as $item)
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <a href="{{ asset('themes/frontend/assets/img/education/' . $item->gambar) }}"
                        class="gallery-item glightbox">
                        <img src="{{ asset('themes/frontend/assets/img/education/' . $item->gambar) }}"
                            alt="{{ $item->judul }}" class="img-fluid rounded" loading="lazy">
                        <div class="gallery-overlay">
                            <span>{{ $item->judul }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="{{ ('/galeri') }}" class="btn-view-all">{{ $pages_settings['home_section6_button_title'] ?? '-'
                }}</a>
        </div>
    </div>
</section>

<section id="events" class="events section">
    <div class="container section-title mb-0" data-aos="fade-up">
        <h2>{{ $pages_settings['home_section7_title'] ?? '-' }}</h2>
        <p>{{ $pages_settings['home_section7_subtitle'] ?? '-' }}</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
            @foreach($informasi as $item)
            <div class="col-lg-6">
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">{{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}</span>
                        <span class="month">{{
                            strtoupper(\Carbon\Carbon::parse($item->tanggal)->format('M'))
                            }}</span>
                        <span class="month">{{
                            strtoupper(\Carbon\Carbon::parse($item->tanggal)->format('Y'))
                            }}</span>
                    </div>
                    @php
                    $badgeClass = match($item->kategori) {
                    'berita' => 'style="background-color: #e3f2fd; color: #0d47a1; padding: 0.25rem 0.75rem;
                    border-radius: 50px;"',
                    'event' => 'style="background-color: #ffebee; color: #c62828; padding: 0.25rem 0.75rem;
                    border-radius: 50px;"',
                    'pengumuman' => 'style="background-color: #e8f5e9; color: #2e7d32; padding: 0.25rem 0.75rem;
                    border-radius: 50px;"',
                    default => 'class="badge bg-secondary rounded"',
                    }; @endphp
                    <div class="event-content">
                        <div class="event-tag academic" {!! $badgeClass !!}>{{ ucfirst($item->kategori) }}</div>
                        <h3>{{ $item->judul }}</h3>
                        <p>{{ $item->deskripsi }}</p>
                        <div class="event-meta">
                            <div class="meta-item">
                                <span class="text-muted"><i class="bi bi-clock"></i> {{
                                    \Carbon\Carbon::parse($item->jam)->format('H:i')
                                    }}
                                </span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>{{ $item->tempat }}</span>
                            </div>
                        </div>
                        <div class="event-actions">
                            <a href="#" class="btn-learn-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="{{ ('/informasi') }}" class="btn-view-all">{{ $pages_settings['home_section7_button_title'] ??
                '-'
                }}</a>
        </div>
    </div>
</section>
@endsection