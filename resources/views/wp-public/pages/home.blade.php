@extends('wp-public.layouts.app')
@section('content')
<style>
    .students-life .life-categories .category-card .icon-container {
        color: #2b378f !important;
    }

    .students-life .life-categories .category-card .icon-container:hover {
        color: #fff !important;
    }
</style>
<section id="hero" class="hero section dark-background">
    <div class="hero-container">
        <img class="video-background"
            src="https://smkn1manokwari.sch.id/wp-content/uploads/2022/06/cropped-cropped-20220413_082041-scaled-2-2.jpg"
            alt="">
        {{-- <video autoplay muted loop playsinline class="video-background">
            <source src="{{ asset('themes/frontend/assets/img/education/video-2.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video> --}}
        <div class="overlay"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12" data-aos="zoom-out" data-aos-delay="100">
                    <div class="hero-content text-center">
                        <h4 class="fst-italic">{{ $identities['welcome_text'] ?? 'Judul Sekolah' }}</h4>
                        <h1>{{ $identities['nama'] ?? 'Judul Sekolah' }}</h1>
                        <h5></h5>
                        <p>{{ $identities['tagline'] ?? 'Tagline Sekolah' }}</p>
                        <div class="cta-buttons d-flex justify-content-center">
                            <a href="{{ ('/ppdb') }}" class="btn-primary">INFO PPDB</a>
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
                        {{ $identities['running_text'] ?? 'Text Berjalan' }}
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
                <h2 class="display-6 fw-bold mb-4">Selamat datang di, <span>SMK Negeri 1 Manokwari</span></h2>
                <p class="mb-4"></p>Dengan bangga kami sambut seluruh siswa, orang tua, serta mitra pendidikan di SMK
                Negeri 1 Manokwari, sekolah yang
                berkomitmen mencetak generasi unggul di bidang manajemen, bisnis, dan teknologi.
                <p class="mb-3"></p>
                Mengusung tagline
                "Smart, Professional,
                Entrepreneurial", kami terus menghadirkan pendidikan yang relevan dengan kebutuhan dunia kerja dan
                industri masa kini.
                Kami percaya bahwa sinergi antara pendidikan dan dunia industri adalah kunci untuk menciptakan
                lulusan yang siap
                bersaing secara global, baik dari segi keterampilan teknis, jiwa kepemimpinan, maupun soft skill
                yang mumpuni.

                <p class="mb-3"></p>
                SMK Negeri 1 Manokwari memiliki visi menjadi SMK unggulan di bidang manajemen dan bisnis yang
                berbasis digital dan
                berkarakter, dengan semangat profesionalisme, inovasi, dan kemitraan. Untuk mewujudkannya, kami
                terus berupaya membekali
                peserta didik dengan kompetensi sesuai program keahlian, membentuk karakter wirausaha, serta
                menjalin kolaborasi
                strategis dengan dunia usaha dan dunia industri.

                <div class="d-flex align-items-center mt-4 signature-block">
                    <div class="ms-0">
                        <p class="mb-0 fw-bold">{{ $identities['kepsek'] ?? 'Kepala Sekolah' }}</p>
                        <p class="mb-0 text-muted">Kepala SMKN 1 Manokwari</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                <div class="image-stack">
                    <div class="image-stack-item image-stack-item-top" data-aos="zoom-in" data-aos-delay="400">
                        <img src="https://smkn1manokwari.sch.id/wp-content/uploads/2022/06/cropped-cropped-20220413_082041-scaled-2-2.jpg"
                            alt="Campus Life" class="img-fluid rounded-4 shadow-lg">
                    </div>
                    <div class="image-stack-item image-stack-item-bottom" data-aos="zoom-in" data-aos-delay="500">
                        <img src="{{ asset('themes/frontend/assets/img/education/students-2.webp') }}" alt="Students"
                            class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </div>

        <section id="stats" class="stats section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="stats-overview" data-aos="fade-right" data-aos-delay="200">
                            <h2 class="stats-title">Percayakan Masa Depan Anak Anda di Tangan Kami</h2>
                            <p class="stats-description">Sekolah dengan fasilitas lengkap dan tenaga pendidik yang
                                up-to-date dengan perkembangan teknologi siap mengantar Anda ke
                                pintu gerbang kesuksesan.
                            </p>
                            <div class="stats-cta">
                                <a href="{{ ('/prodi') }}" class="btn btn-primary">LIHAT JURUSAN</a>
                                <a href="{{ ('/ppdb') }}" class="btn btn-outline">INFO PPDB</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="stats-card" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="stats-icon">
                                        <i class="bi bi-people-fill"></i>
                                    </div>
                                    <div class="stats-label">Fasilitas Lengkap</div>
                                    <p class="stats-description">Penunjang belajar dengan kualitas premium.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stats-card" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="stats-icon">
                                        <i class="bi bi-person-workspace"></i>
                                    </div>
                                    <div class="stats-label">Lingkungan Nyaman</div>
                                    <p class="stats-description">Berada di lingkungan yang asri, aman, dan kondusif.</p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stats-card" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="stats-icon">
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div class="stats-label">Pengajar Kompeten</div>
                                    <div class="stats-description">Guru yangup-to-date dengan perkembangan industri.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="stats-card" data-aos="zoom-in" data-aos-delay="600">
                                    <div class="stats-icon">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div class="stats-label">Kerjasama Luas</div>
                                    <div class="stats-description">Memperbesar kesempatan bekerja sebelum lulus.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section id="featured-programs" class="featured-programs section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Program Keahlian</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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
                                    <a href="#" class="program-btn"><span>Learn More</span> <i
                                            class="bi bi-arrow-right"></i></a>
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

<section id="students-life" class="students-life section bg-dark">
    <div class="container section-title" data-aos="fade-up">
        <h2 class="text-light">Data Warga Sekolah</h2>
        <p class="text-light">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="life-categories mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">561</p>
                        <h4>Murid</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">50</p>
                        <h4>Guru</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">7</p>
                        <h4>Tenaga Kependidikan</h4>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-card">
                        <p class="icon-container text-light fw-bold fs-2">24</p>
                        <h4>Rombel</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="students-life" class="students-life section">
    <div class="container section-title pb-2" data-aos="fade-up">
        <h2>Galeri Sekolah</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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
    </div>
</section>

<section id="events" class="events section">
    <div class="container section-title mb-0" data-aos="fade-up">
        <h2>Informasi Terbaru</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
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
            <a href="#" class="btn-view-all">View All Events</a>
        </div>
    </div>
</section>
@endsection