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
                            <a class="nav-link {{ request('jabatan') == null ? 'active' : '' }}" href="/gtk">Semua</a>
                        </li>

                        @foreach($daftarJabatan as $item)
                        <li class="nav-item">
                            <a class="nav-link {{ request('jabatan') == $item ? 'active' : '' }}"
                                href="{{ url('/gtk?jabatan=' . urlencode($item)) }}">
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
                            <h3 class="mt-3">{{ $jabatan ?? 'Semua GTK' }}</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus, eros vel
                                vestibulum laoreet, lacus mi efficitur velit, id pharetra odio magna nec augue.</p>
                        </div>
                        <div class="row g-4">
                            @foreach($gtk as $item)
                            <div class="col-md-6 col-lg-4">
                                <div class="faculty-card">
                                    <div class="faculty-image">
                                        <img src="{{ asset('themes/frontend/assets/img/person/' . $item->foto) }}"
                                            class="img-fluid" alt="{{ $item->nama }}">
                                    </div>
                                    <div class="faculty-info">
                                        <h4>{{ $item->nama }}</h4>
                                        <p class="faculty-title">{{ $item->jabatan }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection