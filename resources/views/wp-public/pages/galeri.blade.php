@extends('wp-public.layouts.app')
@section('content')

<section id="students-life" class="students-life section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="students-life-banner" data-aos="zoom-in" data-aos-delay="200">
            <div class="banner-content" data-aos="fade-right" data-aos-delay="300">
                <h2>Jelajahi Dunia Sekolah</h2>
                <p>Temukan kegiatan, budaya, dan momen seru yang membentuk pengalaman belajar di sekolah kami.</p>
            </div>
            <img src="{{ asset('themes/frontend/assets/img/fasilitas/' . ($pages_settings['fasilitas_gambar_2'] ?? '-')) }}"
                alt="Campus Life" class="img-fluid">
        </div>

        <div class="students-life-gallery mt-5" data-aos="fade-up" data-aos-delay="200">
            <div class="section-header text-center">
                <h3>Galeri Kegiatan Sekolah</h3>
                <p>Lihat bagaimana siswa kami belajar, berkarya, dan berkembang melalui berbagai kegiatan seru.</p>
            </div>

            <div class="row g-3">
                @foreach ($galeri as $item)
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="{{ 100 + ($loop->index % 6) * 100 }}">
                    <a href="{{ asset('themes/frontend/assets/img/galeri/' . $item->gambar) }}"
                        class="gallery-item glightbox">
                        <img src="{{ asset('themes/frontend/assets/img/galeri/' . ($item->gambar && file_exists(public_path('themes/frontend/assets/img/galeri/' . $item->gambar)) ? $item->gambar : 'default.png')) }}"
                            class="img-fluid" loading="lazy" alt="{{ $item->judul ?? 'Galeri Sekolah' }}">
                        <div class="gallery-overlay">
                            <span>{{ $item->kategori ?? 'Galeri' }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="pagination-wrapper mt-4" data-aos="fade-up" data-aos-delay="100">
                {{ $galeri->links('pagination::bootstrap-5') }} </div>
        </div>
    </div>
</section>

@endsection