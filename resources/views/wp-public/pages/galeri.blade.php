@extends('wp-public.layouts.app')
@section('content')

<section id="students-life" class="students-life section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="students-life-banner" data-aos="zoom-in" data-aos-delay="200">
            <div class="banner-content" data-aos="fade-right" data-aos-delay="300">
                <h2>Experience Campus Life</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sagittis lacus vel augue laoreet
                    rutrum faucibus dolor auctor.</p>
            </div>
            <img src="{{ asset('themes/frontend/assets/img/education/showcase-2.webp') }}" alt="Campus Life"
                class="img-fluid">
        </div>

        <div class="students-life-gallery mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="section-header text-center">
                <h3>Galeri Kegiatan Sekolah</h3>
                <p>Take a glimpse into our vibrant student community</p>
            </div>

            <div class="row g-3">
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <a href="{{ asset('themes/frontend/assets/img/education/students-1.webp') }}"
                        class="gallery-item glightbox">
                        <img src="{{ asset('themes/frontend/assets/img/education/students-1.webp') }}" class="img-fluid"
                            loading="lazy" alt="Student Life">
                        <div class="gallery-overlay">
                            <span>Campus Events</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{ asset('themes/frontend/assets/img/education/students-2.webp') }}"
                        class="gallery-item glightbox">
                        <img src="{{ asset('themes/frontend/assets/img/education/students-2.webp') }}" class="img-fluid"
                            loading="lazy" alt="Student Life">
                        <div class="gallery-overlay">
                            <span>Student Clubs</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                    <a href="{{ asset('themes/frontend/assets/img/education/students-3.webp') }}"
                        class="gallery-item glightbox">
                        <img src="{{ asset('themes/frontend/assets/img/education/students-3.webp') }}" class="img-fluid"
                            loading="lazy" alt="Student Life">
                        <div class="gallery-overlay">
                            <span>Graduation Day</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <a href="{{ asset('themes/frontend/assets/img/education/students-4.webp') }}"
                        class="gallery-item glightbox">
                        <img src="{{ asset('themes/frontend/assets/img/education/students-4.webp') }}" class="img-fluid"
                            loading="lazy" alt="Student Life">
                        <div class="gallery-overlay">
                            <span>Study Groups</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
                    <a href="{{ asset('themes/frontend/assets/img/education/students-5.webp') }}"
                        class="gallery-item glightbox">
                        <img src="{{ asset('themes/frontend/assets/img/education/students-5.webp') }}" class="img-fluid"
                            loading="lazy" alt="Student Life">
                        <div class="gallery-overlay">
                            <span>Campus Facilities</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- CTA -->
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

</section><!-- /Students Life Section -->

@endsection