@extends('wp-public.layouts.app')
@section('content')
<section id="alumni" class="alumni section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="notable-alumni">
            <div class="section-header text-center" data-aos="fade-up" data-aos-delay="200">
                <h3>Program Keahlian</h3>
                <p>Extraordinary graduates making an impact in their fields</p>
            </div>

            <div class="row">
                @foreach ($prt_jurusan as $index => $item)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ 300 + $index * 100 }}">
                    <div class="alumni-profile">
                        <div class="profile-header">
                            <div class="profile-img">
                                <img src="{{ asset('themes/frontend/assets/img/program-studi/' . $item->gambar) }}"
                                    alt="Alumni" class="img-fluid">
                            </div>
                        </div>
                        <div class="profile-body">
                            <h4>{{ $item->nama }}</h4>
                            <p>{{ $item->deskripsi }}</p>
                            <a href="#" class="btn-view-profile">View Profile <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="btn-explore">Explore More Alumni Stories</a>
            </div>
        </div>

        <div class="impact-banner" data-aos="fade-up" data-aos-delay="200">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="impact-content">
                        <h3>Make a Lasting Impact</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus, velit vel fringilla
                            venenatis, urna risus volutpat nisi, ac commodo dolor nulla quis lorem. In mattis dictum
                            malesuada. Vestibulum non mi eu justo rutrum tempus.</p>
                        <div class="impact-buttons">
                            <a href="#" class="btn-donate">Donate Now</a>
                            <a href="#" class="btn-learn-more">Learn About Impact <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="impact-image">
                        <img src="{{ asset ('themes/frontend/assets/img/education/education-8.webp') }}"
                            alt="Student scholarship recipients" class="img-fluid">
                        <div class="impact-stat">
                            <span class="stat-number">$2.4M</span>
                            <span class="stat-text">in scholarships funded by alumni last year</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection