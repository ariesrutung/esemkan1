@extends('wp-public.layouts.app')
@section('content')

<section id="event" class="event section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <div class="event-image mb-4" data-aos="fade-up">
                    <img src="{{ asset('themes/frontend/assets/img/program-studi/' . $jurusan->gambar) }}"
                        alt="{{ $jurusan->nama }}" class="img-fluid">
                </div>
                <div class="event-meta mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="meta-item">
                                <i class="bi bi-calendar-date"></i>
                                <span>Ruang Kelas: 10</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="meta-item">
                                <i class="bi bi-clock"></i>
                                <span>Siswa: 20</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="meta-item">
                                <i class="bi bi-geo-alt"></i>
                                <span>Main Auditorium</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event-content" data-aos="fade-up" data-aos-delay="200">
                    <h2>{{ $jurusan->nama }}</h2>
                    <p>
                        {{ $jurusan->deskripsi }}
                    </p>
                    <p>

                    <h3 class="mt-5">Materi Khusus</h3>
                    <div class="schedule-table">
                        <div class="schedule-row">
                            <div class="schedule-time">Kelas 10 - Pengenalan Dasar Akuntansi</div>
                            <div class="schedule-activity">
                                <ul class="event-highlights">
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Pengantar Akuntansi dan Bisnis</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Pengenalan Siklus Akuntansi</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>K3 (Keselamatan, Kesehatan Kerja) dalam dunia kerja akuntansi</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="schedule-row">
                            <div class="schedule-time">Kelas XI - Pendalaman Akuntansi Perusahaan Dagang</div>
                            <div class="schedule-activity">
                                <ul class="event-highlights">
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Siklus Akuntansi Perusahaan Dagang</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Pencatatan dalam Jurnal Khusus</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Laporan Keuangan Perusahaan Dagang</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Penggunaan Aplikasi Akuntansi</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="schedule-row">
                            <div class="schedule-time">Kelas XII - Akuntansi Lanjutan dan Kesiapan Kerja</div>
                            <div class="schedule-activity">
                                <ul class="event-highlights">
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Akuntansi Perusahaan Manufaktur</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Perpajakan dan Pengantar Akuntansi Pemerintahan</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Simulasi dan Praktik Kerja Lapangan (PKL)</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle"></i>
                                        <span>Proyek Akhir Akuntansi</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="event-gallery mt-5" data-aos="fade-up" data-aos-delay="300">
                        <h3>Galeri {{ $jurusan->nama }}</h3>
                        <p>Dokumentasi kegiatan Jurusan {{ $jurusan->nama }}</p>
                        <div class="row g-4 mt-2">
                            <div class="col-md-4">
                                <a href="{{ asset('themes/frontend/assets/img/education/events-1.webp') }}"
                                    class="glightbox">
                                    <img src="{{ asset('themes/frontend/assets/img/education/events-1.webp') }}"
                                        alt="Event Gallery" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ asset('themes/frontend/assets/img/education/events-2.webp') }}"
                                    class="glightbox">
                                    <img src="{{ asset('themes/frontend/assets/img/education/events-2.webp') }}"
                                        alt="Event Gallery" class="img-fluid rounded">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ asset('themes/frontend/assets/img/education/events-3.webp') }}"
                                    class="glightbox">
                                    <img src="{{ asset('themes/frontend/assets/img/education/events-3.webp') }}"
                                        alt="Event Gallery" class="img-fluid rounded">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="event-sidebar">
                    <div class="sidebar-widget organizer-info" data-aos="fade-left" data-aos-delay="300">
                        <h3>Ketua Jurusan</h3>
                        <div class="organizer-details">
                            <div class="organizer-image">
                                <img src="{{ asset('themes/frontend/assets/img/person/person-m-5.webp') }}"
                                    class="img-fluid rounded" alt="Organizer">
                            </div>
                            <div class="organizer-content">
                                <h4>Mutifa Rahmawati, S.Pd.</h4>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget related-events" data-aos="fade-left" data-aos-delay="400">
                        <h3>Materi Umum</h3>
                        <div class="related-event-item">
                            <ul class="event-highlights">
                                <li>
                                    <span>Mata pelajaran umum seperti Bahasa Indonesia, Bahasa Inggris, Matematika, dan
                                        Pendidikan Pancasila tetap diajarkan.</span>
                                </li>
                                <li>
                                    <span>Materi dapat disesuaikan dengan kurikulum Kurikulum Merdeka, K13, atau lainnya
                                        tergantung kebijakan sekolah dan Dinas
                                        Pendidikan setempat.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget related-events" data-aos="fade-left" data-aos-delay="400">
                        <h3>Program Keahlian Lainnya</h3>

                        @foreach($related_jurusan as $item)
                        <div class="related-event-item">
                            <div class="related-event-info">
                                <h6>
                                    <a class="fs-6" href="{{ route('jurusan.detail', $item->slug) }}">
                                        {{ $item->nama }}
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