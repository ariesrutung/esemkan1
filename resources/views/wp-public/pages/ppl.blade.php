@extends('wp-public.layouts.app')
@section('content')
<section id="terms-of-service" class="terms-of-service section mt-5">
    <div class="container mt-5" data-aos="fade-up">
        <div class="terms-hero" data-aos="fade-up">
            <h2>Praktik Kerja Lapangan</h2>
            <p>Praktik Kerja Lapangan (PKL) adalah kegiatan Pendidikan, pelatihan, dan pembelajaran yang dilaksanakan di
                dunia usaha atau dunia industri yang relevan dengan kompetensi (kemampuan) peserta didik sesuai
                bidangnya.</p>
        </div>

        <div class="terms-grid" data-aos="fade-up">
            <div class="terms-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-header p-0">
                    <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/education/students-3.webp') }}"
                        alt="">
                </div>
                <div class="card-content">
                    <h5 class="fw-bold">Dokumentasi Kegiatan PKL</h5>
                    <p>By accessing our service, you confirm that you are agreeing to be bound by these terms of
                        service. These terms apply to all users and visitors.</p>
                    <ul class="check-list">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    </ul>
                </div>
            </div>

            <div class="terms-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header p-0">
                    <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/education/students-4.webp') }}"
                        alt="">
                </div>
                <div class="card-content">
                    <h5 class="fw-bold">Dokumentasi Pembekalan PKL</h5>
                    <p>As a user, you have specific rights when using our service, including data privacy and access to
                        features.</p>
                    <ul class="check-list">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    </ul>
                </div>
            </div>

            <div class="terms-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header p-0">
                    <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/education/students-4.webp') }}"
                        alt="">
                </div>
                <div class="card-content">
                    <h5 class="fw-bold">Jurnal PKL SMK YP 17 Pare</h5>
                    <p>As a user, you have specific rights when using our service, including data privacy and access to
                        features.</p>
                    <ul class="check-list">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    </ul>
                </div>
            </div>
            <div class="terms-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-header p-0">
                    <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/education/students-5.webp') }}"
                        alt="">
                </div>
                <div class="card-content">
                    <h5 class="fw-bold">Dokumen Monitoring PKL</h5>
                    <p>As a user, you have specific rights when using our service, including data privacy and access to
                        features.</p>
                    <ul class="check-list">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    </ul>
                </div>
            </div>

            <div class="terms-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header p-0">
                    <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/education/students-4.webp') }}"
                        alt="">
                </div>
                <div class="card-content">
                    <h5 class="fw-bold">Pembagian tempat PKL 2021-2022</h5>
                    <p>As a user, you have specific rights when using our service, including data privacy and access to
                        features.</p>
                    <ul class="check-list">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    </ul>
                </div>
            </div>

            <div class="terms-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-header p-0">
                    <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/education/students-4.webp') }}"
                        alt="">
                </div>
                <div class="card-content">
                    <h5 class="fw-bold">Pembagian tempat PKL 2022-2023</h5>
                    <<p>As a user, you have specific rights when using our service, including data privacy and access to
                        features.</p>
                        <ul class="check-list">
                            <button type="button" class="btn btn-outline-primary">Primary</button>
                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        </ul>
                </div>
            </div>
        </div>

        <div class="terms-points" data-aos="fade-up">
            <h3>Key Points to Note</h3>
            <div class="points-grid">
                <div class="point-item">
                    <div class="point-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>
                    <div class="point-content">
                        <h4>Service Availability</h4>
                        <p>We strive to provide uninterrupted service but cannot guarantee 100% availability.</p>
                    </div>
                </div>

                <div class="point-item">
                    <div class="point-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="point-content">
                        <h4>Privacy Protection</h4>
                        <p>Your data is protected according to our privacy policy and applicable laws.</p>
                    </div>
                </div>

                <div class="point-item">
                    <div class="point-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <div class="point-content">
                        <h4>Content Rights</h4>
                        <p>You retain rights to your content while granting us license to use it.</p>
                    </div>
                </div>
            </div>

            <div class="terms-notices" data-aos="fade-up">
                <div class="notice-wrapper">
                    <div class="notice-items">
                        <div class="notice-item">
                            <div class="notice-marker">
                                <i class="bi bi-exclamation-circle"></i>
                            </div>
                            <div class="notice-content">
                                <h4>Service Modifications</h4>
                                <p>We reserve the right to modify or discontinue any part of our service with or without
                                    notice.</p>
                            </div>
                        </div>

                        <div class="notice-item">
                            <div class="notice-marker">
                                <i class="bi bi-exclamation-circle"></i>
                            </div>
                            <div class="notice-content">
                                <h4>Account Termination</h4>
                                <p>We may terminate accounts that violate these terms or for any other reason at our
                                    discretion.</p>
                            </div>
                        </div>

                        <div class="notice-item">
                            <div class="notice-marker">
                                <i class="bi bi-exclamation-circle"></i>
                            </div>
                            <div class="notice-content">
                                <h4>Terms Updates</h4>
                                <p>These terms may be updated at any time. Continued use of the service implies
                                    acceptance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="terms-contact" data-aos="fade-up">
                <div class="contact-wrapper">
                    <div class="contact-content">
                        <div class="contact-text">
                            <h4>Need Clarification?</h4>
                            <p>If you have questions about these terms, our support team is here to help.</p>
                        </div>
                        <div class="contact-actions">
                            <a href="#" class="btn-primary">Contact Support</a>
                            <a href="#" class="btn-outline">Download Terms</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection