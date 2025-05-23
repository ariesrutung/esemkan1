@extends('wp-public.layouts.app')
@section('content')

<section id="hero" class="hero section dark-background">

    <div class="hero-container">
        <img class="video-background"
            src="https://smkn1manokwari.sch.id/wp-content/uploads/2022/06/cropped-cropped-20220413_082041-scaled-2-2.jpg"
            alt="">
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
        <h2>Program Studi</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <div class="row g-4 isotope-container">
                <div class="col-lg-6 isotope-item filter-bachelor" data-aos="zoom-in" data-aos-delay="100">
                    <div class="program-item">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="program-image-wrapper">
                                    <img src="{{ asset('themes/frontend/assets/img/education/education-1.webp') }}"
                                        class="img-fluid" alt="Program">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="program-content">
                                    <h3>Computer Science</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
                                        luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                                    <a href="#" class="program-btn"><span>Learn More</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 isotope-item filter-master" data-aos="zoom-in" data-aos-delay="100">
                    <div class="program-item">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="program-image-wrapper">
                                    <img src="{{ asset('themes/frontend/assets/img/education/education-7.webp') }}"
                                        class="img-fluid" alt="Program">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="program-content">
                                    <h3>Environmental Studies</h3>
                                    <p>Aenean imperdiet, erat vel consequat mollis, nunc risus aliquam nunc,
                                        eget condimentum urna dui et metus.</p>
                                    <a href="#" class="program-btn"><span>Learn More</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 isotope-item filter-master" data-aos="zoom-in" data-aos-delay="200">
                    <div class="program-item">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="program-image-wrapper">
                                    <img src="{{ asset('themes/frontend/assets/img/education/education-9.webp') }}"
                                        class="img-fluid" alt="Program">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="program-content">
                                    <h3>Mechanical Engineering</h3>
                                    <p>Praesent tincidunt, massa et porttitor imperdiet, lorem ex ultricies
                                        ipsum, a tempus metus eros non tortor.</p>
                                    <a href="#" class="program-btn"><span>Learn More</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 isotope-item filter-certificate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="program-item">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="program-image-wrapper">
                                    <img src="{{ asset('themes/frontend/assets/img/education/education-2.webp') }}"
                                        class="img-fluid" alt="Program">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="program-content">
                                    <h3>Data Science</h3>
                                    <p>Mauris sed erat in mi vestibulum commodo. Donec a purus at justo
                                        facilisis imperdiet tnteger pell</p>
                                    <a href="#" class="program-btn"><span>Learn More</span> <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text-center mt-5">
                    <a href="#" class="btn-view-all btn btn-outline">View All Events</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="recent-news" class="recent-news section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita Terbaru</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article>
                    <div class="post-img">
                        <img src="{{ asset('themes/frontend/assets/img/blog/blog-post-1.webp') }}" alt=""
                            class="img-fluid">
                    </div>

                    <p class="post-category">Politics</p>

                    <h2 class="title">
                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('themes/frontend/assets/img/person/person-f-12.webp') }}" alt=""
                            class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div>

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('themes/frontend/assets/img/blog/blog-post-2.webp') }}" alt=""
                            class="img-fluid">
                    </div>

                    <p class="post-category">Sports</p>

                    <h2 class="title">
                        <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('themes/frontend/assets/img/person/person-f-13.webp') }}" alt=""
                            class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Allisa Mayer</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 5, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div>

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('themes/frontend/assets/img/blog/blog-post-3.webp') }}" alt=""
                            class="img-fluid">
                    </div>

                    <p class="post-category">Entertainment</p>

                    <h2 class="title">
                        <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                            soluta</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('themes/frontend/assets/img/person/person-m-10.webp') }}" alt=""
                            class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Mark Dower</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 22, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

        </div><!-- End recent posts list -->

    </div>

</section>

<section id="events" class="events section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Kegiatan Terbaru</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="event-card">
                    <div class="event-date">
                        <span class="month">FEB</span>
                        <span class="day">15</span>
                        <span class="year">2025</span>
                    </div>
                    <div class="event-content">
                        <div class="event-tag academic">Academic</div>
                        <h3>Science Fair Exhibition</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                        <div class="event-meta">
                            <div class="meta-item">
                                <i class="bi bi-clock"></i>
                                <span>09:00 AM - 03:00 PM</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>Main Auditorium</span>
                            </div>
                        </div>
                        <div class="event-actions">
                            <a href="#" class="btn-learn-more">Learn More</a>
                            <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                Calendar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-card">
                    <div class="event-date">
                        <span class="month">MAR</span>
                        <span class="day">10</span>
                        <span class="year">2025</span>
                    </div>
                    <div class="event-content">
                        <div class="event-tag sports">Sports</div>
                        <h3>Annual Sports Day</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi.</p>
                        <div class="event-meta">
                            <div class="meta-item">
                                <i class="bi bi-clock"></i>
                                <span>08:30 AM - 05:00 PM</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>School Playground</span>
                            </div>
                        </div>
                        <div class="event-actions">
                            <a href="#" class="btn-learn-more">Learn More</a>
                            <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                Calendar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-card">
                    <div class="event-date">
                        <span class="month">APR</span>
                        <span class="day">22</span>
                        <span class="year">2025</span>
                    </div>
                    <div class="event-content">
                        <div class="event-tag arts">Arts</div>
                        <h3>Spring Music Concert</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <div class="event-meta">
                            <div class="meta-item">
                                <i class="bi bi-clock"></i>
                                <span>06:30 PM - 08:30 PM</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>Performing Arts Center</span>
                            </div>
                        </div>
                        <div class="event-actions">
                            <a href="#" class="btn-learn-more">Learn More</a>
                            <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                Calendar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="event-card">
                    <div class="event-date">
                        <span class="month">MAY</span>
                        <span class="day">8</span>
                        <span class="year">2025</span>
                    </div>
                    <div class="event-content">
                        <div class="event-tag community">Community</div>
                        <h3>Parent-Teacher Conference</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                        <div class="event-meta">
                            <div class="meta-item">
                                <i class="bi bi-clock"></i>
                                <span>01:00 PM - 07:00 PM</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>Various Classrooms</span>
                            </div>
                        </div>
                        <div class="event-actions">
                            <a href="#" class="btn-learn-more">Learn More</a>
                            <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to
                                Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="#" class="btn-view-all">View All Events</a>
        </div>
    </div>
</section>

<section id="students-life" class="students-life section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="cta-wrapper mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="cta-content">
                <div class="row align-items-center">
                    <div class="col-lg-8" data-aos="fade-right" data-aos-delay="300">
                        <h3>Ready to Join Our Community?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius felis nec sem viverra,
                            nec tincidunt felis mollis.</p>
                    </div>
                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="400">
                        <div class="cta-buttons">
                            <a href="#" class="btn btn-primary">Schedule a Visit</a>
                            <a href="#" class="btn btn-outline">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection