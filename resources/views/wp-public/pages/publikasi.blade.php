@extends('wp-public.layouts.app')
@section('content')

<section class="page-section bg-dark mt-5 pt-5" id="portfolio">
    <div class="container mt-5 py-5">
        <div class="text-center mt-5">
            <h2 class="section-heading text-light">Publikasi</h2>
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

@endsection