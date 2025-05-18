@extends('wp-public.layouts.app')
@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our School!</div>
        <div class="masthead-heading text-uppercase">SMK Negeri 1 Manokwari</div>
        <a class="btn btn-primary btn-lg fw-bold text-uppercase" href="{{ ('/ppdb') }}">INFO PPDB</a>
    </div>
</header>

<section class="page-section" id="services">
    <div class="container mb-5">
        <div class="row p-5 text-center">
            <blockquote class="blockquote text-primary px-5">
                <p class="fw-bold">Dengan budi pekerti, tiap-tiap manusia berdiri sebagai manusia merdeka
                    (berpribadi), yang dapat memerintah atau
                    menguasai diri sendiri. Inilah manusia beradab dan itulah maksud dan tujuan pendidikan dalam garis
                    besarnya.
                </p>
                <footer class="blockquote-footer">Bapak Pendidikan Indonesia <cite title="Source Title">- Ki Hajar
                        Dewantara</cite>
                </footer>
            </blockquote>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-lightbulb-fill fs-1 text-primary"></i>
                    </span>
                    <h4 class="my-3">Fasilitas Lengkap</h4>
                    <p class="text-muted">Penunjang belajar dengan kualitas premium.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-tree-fill fs-1 text-primary"></i>
                    </span>
                    <h4 class="my-3">Lingkungan Nyaman</h4>
                    <p class="text-muted">Berada di lingkungan yang asri, aman, dan kondusif.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-mortarboard-fill fs-1 text-primary"></i>
                    </span>
                    <h4 class="my-3">Pengajar Kompeten</h4>
                    <p class="text-muted">Guru yang up-to-date dengan perkembangan industri.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-megaphone-fill fs-1 text-primary"></i>
                    </span>
                    <h4 class="my-3">Kerjasama Luas</h4>
                    <p class="text-muted">Memperbesar kesempatan bekerja sebelum lulus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-4 py-5">
        <div class="text-center">
            <h2 class="section-heading text-light">Program Keahlian</h2>
            <h3 class="section-subheading text-light p-2 fst-normal">SMK Negeri 1 Manokwari memiliki 6 program
                keahlian
                yang bisa kalian pilih. Keenam program keahlian ini saling berkaitan satu sama lain. Sehingga dengan
                dukungan guru-guru kami yang keren nantinya kalian bisa mempelajari semuanya.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/jurusan/1.jpeg')}}"
                            alt="..." />

                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Manajemen Perkantoran</div>
                        <div class="portfolio-caption-subheading text-muted fst-normal">Berfokus pada keterampilan dan
                            pengetahuan
                            yang dibutuhkan untuk mengelola kegiatan administratif di perkantoran. Program ini dirancang
                            untuk mempersiapkan siswa dengan kemampuan praktis dan teoritis yang diperlukan dalam
                            berbagai tugas administrasi dan manajemen kantor.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid w-100" src="{{ asset('themes/frontend/assets/img/jurusan/2.png')}}"
                            alt="..." />

                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Akuntansi</div>
                        <div class="portfolio-caption-subheading text-muted fst-normal">Berfokus pada pengajaran
                            keterampilan dan
                            pengetahuan yang
                            diperlukan untuk mengelola dan mencatat transaksi keuangan. Program ini bertujuan untuk
                            mempersiapkan siswa menjadi
                            tenaga profesional di bidang akuntansi dengan kemampuan praktis dan teoritis yang
                            mumpuni.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid w-100" src="{{ asset('themes/frontend/assets/img/jurusan/3.jpg')}}"
                            alt="..." />

                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bisnis Ritel</div>
                        <div class="portfolio-caption-subheading text-muted fst-normal">Berfokus pada pengajaran
                            keterampilan dan
                            pengetahuan yang
                            dibutuhkan untuk mengelola operasi dan kegiatan bisnis di sektor ritel. Program ini
                            bertujuan untuk mempersiapkan siswa
                            menjadi tenaga profesional yang kompeten di bidang ritel, baik di toko fisik maupun
                            online.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid w-100" src="{{ asset('themes/frontend/assets/img/jurusan/4.jpg')}}"
                            alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Perbankan</div>
                        <div class="portfolio-caption-subheading text-muted fst-normal">Berfokus pada pengajaran
                            keterampilan dan
                            pengetahuan yang
                            dibutuhkan untuk bekerja di sektor perbankan dan keuangan. Program ini bertujuan untuk
                            mempersiapkan siswa menjadi
                            tenaga profesional yang kompeten di bidang perbankan dengan pemahaman yang baik tentang
                            operasi bank, produk keuangan,
                            dan layanan pelanggan.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid w-100" src="{{ asset('themes/frontend/assets/img/jurusan/5.jpg')}}"
                            alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Pariwisata</div>
                        <div class="portfolio-caption-subheading text-muted fst-normal">Berfokus pada pengajaran
                            keterampilan dan
                            pengetahuan yang
                            diperlukan untuk bekerja di sektor pariwisata. Program ini dirancang untuk mempersiapkan
                            siswa menjadi tenaga
                            profesional yang kompeten dalam industri pariwisata, meliputi layanan wisata,
                            perhotelan, perjalanan, dan manajemen
                            destinasi.</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid w-100" src="{{ asset('themes/frontend/assets/img/jurusan/6.jpg')}}"
                            alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Logistik</div>
                        <div class="portfolio-caption-subheading text-muted fst-normal">Berfokus pada pengajaran
                            keterampilan dan
                            pengetahuan yang
                            diperlukan untuk mengelola rantai pasokan, distribusi barang, dan operasi logistik.
                            Program ini bertujuan untuk
                            mempersiapkan siswa menjadi tenaga profesional yang kompeten di bidang logistik dan
                            manajemen rantai pasokan.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section py-5 bg-warning" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-light">Siswa Kami Lebih dari 500+</h2>
            <h3 class="section-subheading text-light p-2 fst-normal">Mayoritas siswa kami tidak hanya dari
                Manokwari, namun juga dari berbagai daerah. Semuanya berkesempatan bergabung dengan kami.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="card p-3">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-book-half fs-1 text-danger"></i>
                    </span>
                    <h4 class="my-3">Mata Pelajaran</h4>
                    <p class="text-muted">Penunjang belajar dengan kualitas premium.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-pc-display-horizontal fs-1 text-danger"></i>
                    </span>
                    <h4 class="my-3">Sarpras</h4>
                    <p class="text-muted">Berada di lingkungan yang asri, aman, dan kondusif.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-buildings-fill fs-1 text-danger"></i>
                    </span>
                    <h4 class="my-3">Rombel</h4>
                    <p class="text-muted">Guru yang up-to-date dengan perkembangan industri.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <span class="fa-stack fa-4x">
                        <i class="bi bi-people-fill fs-1 text-danger"></i>
                    </span>
                    <h4 class="my-3">PTK & PD</h4>
                    <p class="text-muted">Memperbesar kesempatan bekerja sebelum lulus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section" id="about">
    <div class="container mt-4 py-5">
        <div class="text-center">
            <h2 class="section-heading">Mengapa Memilih SMK Negeri 1 Manokwari?</h2>
            <h3 class="section-subheading text-muted">Beberapa poin berikut dapat dijadikan bahan pertimbangan sebelum
                bergabung dengan kami.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/1.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Sekolah Terakreditasi</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">SMK Negeri 1 Manokwari telah terakreditasi B dengan SK Pendirian
                            Sekolah : 84/Gib/1964, Tanggal SK Pendirian : 1964-09-30, SK Izin Operasional :
                            400.3.2/118/DP/II/2024, TanggalSK Izin Operasional : 2024-02-06</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/2.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Kurikulum Merdeka</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Merdeka Belajar SMK Negeri 1 Manokwari dengan 4 Pilar yaitu SDM GURU,
                            Pendidikan Karakter Siswa, KURIKULUM dan Moderenisasi Sarana Prasaranasekolah.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/3.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Sekolah Berprestasi</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Memiliki segudang prestasi baik tingkat lokal, regional maupun
                            nasional. Pencapaian dan penghargaan yang dimiliki SMK Negeri 1 Manokwari, baik di
                            bidang akademik maupun non-akademik.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/4.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Alumni Berkualitas</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Memiliki kompetensi, kualitas, serta torehan akademik yang baik,
                            pengalaman kerja yang relevan, dan keterlibatan aktif dalam kegiatan kemasyarakatan dan
                            pengembangan potensi diri. Alumni siap kerja, siap kuliah dan siap berwirausaha.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/5.jpeg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Beragam Program Beasiswa</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Beasiswa untuk siswa SMK tersedia dari berbagai pihak, seperti
                            pemerintah, yayasan, perusahaan, dan sekolah sendiri, seperti Beasiswa DJITU, Beasiswa
                            Pendidikan Indonesia (BPI) Kemendikbudristek, Beasiswa Indonesia Bangkit, Beasiswa
                            Amartha Cendekia, dan Beasiswa Prestasi Kita.
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-4 py-5">
        <div class="text-center">
            <h2 class="section-heading text-white">Galeri Sekolah</h2>
            <h3 class="section-subheading text-muted">Berbagai kegiatan yang dilaksanakan oleh peserta didik di SMK
                Negeri 1 Manokwari.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/portfolio/1.jpg') }}"
                            alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/portfolio/5.jpg') }}"
                            alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/portfolio/3.jpg') }}"
                            alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/portfolio/4.jpg')}}"
                            alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/portfolio/6.jpg') }}"
                            alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/portfolio/7.jpg') }}"
                            alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('themes/frontend/assets/img/logos/microsoft.svg') }}" alt="..."
                        aria-label="Microsoft Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('themes/frontend/assets/img/logos/google.svg') }}" alt="..."
                        aria-label="Google Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('themes/frontend/assets/img/logos/facebook.svg') }}" alt="..."
                        aria-label="Facebook Logo" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                        src="{{ asset('themes/frontend/assets/img/logos/ibm.svg') }}" alt="..."
                        aria-label="IBM Logo" /></a>
            </div>
        </div>
    </div>
</div>
@endsection