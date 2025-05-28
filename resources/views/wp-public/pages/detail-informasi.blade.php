@extends('wp-public.layouts.app')
@section('content')

<section id="event" class="event section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <div class="event-image mb-4" data-aos="fade-up">
                    <img src="{{ asset('themes/frontend/assets/img/informasi/' . $informasi->gambar) }}"
                        alt="{{ $informasi->judul }}" class="img-fluid">
                </div>
                <div class="event-meta mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="meta-item">
                                <i class="bi bi-calendar-date"></i>
                                <span>{{ $informasi->tanggal }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="meta-item">
                                <i class="bi bi-clock"></i>
                                <span>{{ $informasi->jam }}</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>{{ $informasi->tempat }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-content" data-aos="fade-up" data-aos-delay="200">
                    <h2>{{ $informasi->judul }}</h2>
                    <p>
                        {{ $informasi->deskripsi }}
                    </p>
                    <p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="event-sidebar">
                    <div class="sidebar-widget related-events" data-aos="fade-left" data-aos-delay="400">
                        <h3>{{ $informasi->judul }}Lainnya</h3>

                        @foreach($related_informasi as $item)
                        <div class="related-event-item">
                            <div class="related-event-info">
                                <h6>
                                    <a class="fs-6" href="{{ route('informasi.detail', $item->slug) }}">
                                        {{ $item->judul }}
                                    </a>
                                </h6>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection