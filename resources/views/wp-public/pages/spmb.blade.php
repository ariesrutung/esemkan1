@extends('wp-public.layouts.app')
@section('content')

<section id="admissions" class="admissions section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="row gy-5 g-lg-5">
            <div class="col-lg-6">
                <div class="admissions-info" data-aos="fade-up">
                    <h2>{{ $spmb['title'] ?? '' }}</h2>
                    <p>{{ $spmb['deskripsi'] ?? '' }}</p>
                    </p>
                    <div class="cta-wrapper mt-3" data-aos="fade-up">
                        <div class="row g-0">
                            <div class="col-md-12 cta-item apply p-3 rounded">
                                <div class="row">
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <p class="p-0 m-0">Tunggu apa lagi, yuk menjadi bagian dari kami?</p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="#cpAlamat" class="btn btn-primary">Gabung Sekarang</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="persyaratanRegistrasi" class="admissions-steps mt-5">
                        <h3>Persyaratan Pendaftaran</h3>
                        <div class="steps-wrapper mt-4">
                            @foreach ($syarat as $index => $item)
                            @if ($item['judul']) {{-- Tampilkan hanya jika ada judul --}}
                            <div class="step-item" data-aos="fade-up" data-aos-delay="{{ 100 * ($index + 1) }}">
                                <div class="step-number">{{ $index + 1 }}</div>
                                <div class="step-content">
                                    <h4>{{ $item['judul'] }}</h4>
                                    <p>{{ $item['deskripsi'] }}</p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="admissions-requirements p-3" data-aos="fade-up">
                    <img class="img-fluid rounded" src="{{ asset('storage/spmb/brosur/'. $spmb['gbr_brosur']) }}"
                        alt="" />
                </div>
            </div>

            <div id="cpAlamat" class="cta-wrapper mt-5" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="cta-item tour">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h3>Lokasi Pendaftaran</h3>
                            <p class="fs-6 fw-bold">{{ $spmb['lokasi'] ?? '' }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cta-item apply">
                            <i class="bi bi-whatsapp"></i>
                            <h3>Informasi Kontak</h3>
                            <p class="fs-6 fw-bold">{{ $spmb['no_wa'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection