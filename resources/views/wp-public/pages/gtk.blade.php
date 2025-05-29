@extends('wp-public.layouts.app')
@section('content')

<section id="faculty--staff" class="faculty--staff section pt-5 mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="departments-nav">
                    <h4 class="departments-title">Jurusan</h4>
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request('jurusan') == null ? 'active' : '' }}" href="/gtk">Semua</a>
                        </li>

                        @foreach($daftarJurusan as $item)
                        <li class="nav-item">
                            <a class="nav-link {{ request('jurusan') == $item ? 'active' : '' }}"
                                href="{{ url('/gtk?jurusan=' . urlencode($item)) }}">
                                {{ $item }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-9" data-aos="fade-up" data-aos-delay="400">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="faculty--staff-tab-1">
                        <div class="department-info mb-4">
                            <h3 class="mt-3">{{ $jurusan ?? 'Semua Guru dan Tenaga Pendidik' }}</h3>
                            <p>{{ $deskripsi ?? 'List Guru' }}</p>
                        </div>
                        <div class="row g-4">
                            @foreach($gtk as $item)
                            <div class="col-md-4 col-lg-3">
                                <div class="faculty-card">
                                    <div class="faculty-image">
                                        <img src="{{ asset('themes/frontend/assets/img/gtk/' . $item->foto) }}"
                                            class="img-fluid" alt="{{ $item->nama }}">
                                    </div>
                                    <div class="faculty-info">
                                        <h4>{{ $item->nama_lengkap }}</h4>
                                        <p class="faculty-title">{{ $item->jurusan }}</p>
                                        <p class="faculty-title">NIP: {{ $item->nip }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="pagination-wrapper mt-4" data-aos="fade-up" data-aos-delay="100">
                            {{ $gtk->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection