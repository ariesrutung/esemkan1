@extends('wp-public.layouts.app')
@section('content')


<section class="page-section bg-dark mt-5 pt-5" id="portfolio">
    <div class="container mt-5 py-5">
        <div class="text-center mt-5">
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

@endsection