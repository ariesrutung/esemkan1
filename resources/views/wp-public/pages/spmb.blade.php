@extends('wp-public.layouts.app')
@section('content')

<section id="admissions" class="admissions section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="row gy-5 g-lg-5">
            <div class="col-lg-6">
                <div class="admissions-info" data-aos="fade-up">
                    <h2>{{ $pages_settings['spmb_title'] ?? '-' }}</h2>
                    <p>{{ $pages_settings['spmb_short_desciption'] ?? '-' }}</p>
                    </p>
                    <div class="cta-wrapper mt-3" data-aos="fade-up">
                        <div class="row g-0">
                            <div class="col-md-12 cta-item apply p-3 rounded">
                                <div class="row">
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <p class="p-0 m-0">{{ $pages_settings['spmb_message'] ?? '' }}</p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="#cpAlamat" class="btn btn-primary">{{
                                            $pages_settings['spmb_button_tile'] ?? '-' }}</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div id="persyaratanRegistrasi" class="admissions-steps mt-5">
                        <h3>{{ $pages_settings['spmb_syarat_title'] ?? '' }}</h3>
                        <div class="steps-wrapper mt-4">
                            @foreach ($syarat as $index => $item)
                            <div class="step-item" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                                <div class="step-number">{{ $index + 1 }}</div>
                                <div class="step-content">
                                    <h4>{{ $item['judul'] }}</h4>
                                    <p>{{ $item['deskripsi'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="admissions-requirements p-3" data-aos="fade-up">
                    <img class="img-fluid rounded"
                        src="{{ asset('themes/frontend/assets/img/spmb/'. $pages_settings['spmb_gbr_brosur']) }}"
                        alt="" />

                    <div class="mission-vision mt-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="mission">
                            <span class="text-muted mx-3">Unduh brosur melalui tombol Unduh ini </span>
                            <a href="{{ asset('themes/frontend/assets/img/spmb/' . ($pages_settings['spmb_gbr_brosur'] ?? '')) }}"
                                class="btn btn-sm btn-outline-primary" download>
                                Unduh
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="cpAlamat" class="cta-wrapper mt-5" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="cta-item tour">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h3>Lokasi Pendaftaran</h3>
                            <p class="fs-6 fw-bold">{{ $pages_settings['spmb_lokasi'] ?? '' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cta-item apply">
                            <i class="bi bi-whatsapp"></i>
                            <h3>Informasi Kontak</h3>
                            <p class="fs-6 fw-bold">{{ $pages_settings['spmb_cp_wa'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection