@extends('wp-public.layouts.app')
<style>
    .section .terms-hero h3 {
        font-size: 2.2rem;
        margin-bottom: 1rem;
        position: relative;
        display: inline-block;
        font-weight: 700;
    }

    .section .terms-hero h3::after {
        content: "";
        width: 70px;
        height: 4px;
        position: absolute;
        bottom: -12px;
        left: 50%;
        transform: translateX(-50%);
        background: var(--accent-color);
        border-radius: 2px;
    }
</style>
@section('content')
<section id="terms-of-service" class="terms-of-service section mt-5">
    <div class="container mt-5" data-aos="fade-down">
        <div class="terms-hero" data-aos="fade-up">
            <h3>{{ $pages_settings['pkl_title'] ?? '-' }}</h3>
            <p class="mt-2">{{ $pages_settings['pkl_short_desciption'] ?? '-' }}</p>
        </div>
        <div class="terms-grid" data-aos="fade-up">
            @foreach($pklList as $index => $pkl)
            <div class="terms-card" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                <div class="card-header p-0">
                    <img class="img-fluid" src="{{ asset('themes/frontend/assets/img/pkl/' . $pkl->gambar) }}" alt="">
                </div>
                <div class="card-content">
                    <h5 class="fw-bold">{{ $pkl->judul }}</h5>
                    <p>{{ $pkl->deskripsi }}</p>
                    <ul class="check-list">
                        @if($pkl->link)
                        <a href="{{ asset('uploads/pdf/' . $pkl->link) }}" class="btn btn-sm btn-outline-primary"
                            target="_blank">Lihat PDF</a>
                        <a href="{{ asset('uploads/pdf/' . $pkl->link) }}" class="btn btn-sm btn-outline-secondary"
                            download>Download PDF</a>
                        @endif
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection