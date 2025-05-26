@extends('wp-public.layouts.app')
@section('content')
<section id="terms-of-service" class="terms-of-service section mt-5">
    <div class="container mt-5" data-aos="fade-down">
        <div class="terms-hero" data-aos="fade-up">
            <h2>{{ $identities['title'] ?? 'Judul' }}</h2>
            <p>{{ $identities['short_desciption'] ?? 'Subjudul' }}</p>
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