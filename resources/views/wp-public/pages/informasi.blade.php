@extends('wp-public.layouts.app')
@section('content')

<section id="events" class="events section mt-5">
    <div class="container section-title mt-5 mb-2" data-aos="fade-down">
        <h2>{{ $pages_settings['informasi_title'] ?? '-' }}</h2>
        <p>{{ $pages_settings['informasi_short_desciption'] ?? '-' }}</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="event-filters mb-4">
            <form method="GET" action="{{ route('informasi.index') }}">
                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <select class="form-select" name="bulan" onchange="this.form.submit()">
                            <option value="">Semua Bulan</option>
                            @foreach($bulanList as $num => $namaBulan)
                            <option value="{{ $num }}" {{ request('bulan')==$num ? 'selected' : '' }}>
                                {{ $namaBulan }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="form-select" name="kategori" onchange="this.form.submit()">
                            <option value="">Semua Kategori</option>
                            @foreach($kategoriList as $kategori)
                            <option value="{{ $kategori }}" {{ request('kategori')==$kategori ? 'selected' : '' }}>
                                {{ ucfirst($kategori) }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
        </div>

        <div class="row g-4">
            @foreach($prt_informasi as $item)
            <div class="col-lg-6">
                <div class="event-card">
                    <div class="event-date">
                        <span class="day">{{ \Carbon\Carbon::parse($item->tanggal)->format('d') }}</span>
                        <span class="month">{{
                            strtoupper(\Carbon\Carbon::parse($item->tanggal)->format('M'))
                            }}</span>
                        <span class="month">{{
                            strtoupper(\Carbon\Carbon::parse($item->tanggal)->format('Y'))
                            }}</span>
                    </div>
                    @php
                    $badgeClass = match($item->kategori) {
                    'berita' => 'style="background-color: #e3f2fd; color: #0d47a1; padding: 0.25rem 0.75rem;
                    border-radius: 50px;"',
                    'event' => 'style="background-color: #ffebee; color: #c62828; padding: 0.25rem 0.75rem;
                    border-radius: 50px;"',
                    'pengumuman' => 'style="background-color: #e8f5e9; color: #2e7d32; padding: 0.25rem 0.75rem;
                    border-radius: 50px;"',
                    default => 'class="badge bg-secondary rounded"',
                    }; @endphp
                    <div class="event-content">
                        <div class="event-tag academic" {!! $badgeClass !!}>{{ ucfirst($item->kategori) }}</div>
                        <h3>{{ $item->judul }}</h3>
                        <p>{{ $item->deskripsi }}</p>
                        <div class="event-meta">
                            <div class="meta-item">
                                <span class="text-muted"><i class="bi bi-clock"></i> {{
                                    \Carbon\Carbon::parse($item->jam)->format('H:i')
                                    }}
                                </span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>{{ $item->tempat }}</span>
                            </div>
                        </div>
                        <div class="event-actions">
                            <a href="{{ route('informasi.detail', $item->slug) }}" class="btn-learn-more">
                                Selengkapnya </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="pagination-wrapper" data-aos="fade-up" data-aos-delay="100">
                {{ $prt_informasi->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</section>
@endsection