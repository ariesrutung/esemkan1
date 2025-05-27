@extends('wp-public.layouts.app')
@section('content')
<section id="alumni" class="alumni section">
    <div class="container" data-aos="fade-down" data-aos-delay="100">
        <div class="notable-alumni">
            <div class="section-header text-center" data-aos="fade-up" data-aos-delay="200">
                <h3>{{ $pages_settings['program_keahlian_title'] ?? '-' }}</h3>
                <p class="mt-3">{{ $pages_settings['program_keahlian_short_desciption'] ?? '-' }}</p>
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
                            <a href="#" class="btn-view-profile">Selengkapnya <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection