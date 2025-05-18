@extends('wp-public.layouts.app')
@section('content')

<section class="page-section mt-5 pt-5 bg-dark" id="about">
    <div class="container mt-5 py-5">
        <div class="text-center mt-5">
            <h2 class="section-heading text-light">Profil</h2>
            <h3 class="section-subheading text-light">Beberapa poin berikut dapat dijadikan bahan pertimbangan sebelum
                bergabung dengan kami.</h3>
        </div>
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/1.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Sekolah Terakreditasi</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-light">SMK Negeri 1 Manokwari telah terakreditasi B dengan SK Pendirian
                            Sekolah : 84/Gib/1964, Tanggal SK Pendirian : 1964-09-30, SK Izin Operasional :
                            400.3.2/118/DP/II/2024, TanggalSK Izin Operasional : 2024-02-06</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/2.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Kurikulum Merdeka</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-light">Merdeka Belajar SMK Negeri 1 Manokwari dengan 4 Pilar yaitu SDM GURU,
                            Pendidikan Karakter Siswa, KURIKULUM dan Moderenisasi Sarana Prasaranasekolah.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/3.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Sekolah Berprestasi</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-light">Memiliki segudang prestasi baik tingkat lokal, regional maupun
                            nasional. Pencapaian dan penghargaan yang dimiliki SMK Negeri 1 Manokwari, baik di
                            bidang akademik maupun non-akademik.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/4.png')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Alumni Berkualitas</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-light">Memiliki kompetensi, kualitas, serta torehan akademik yang baik,
                            pengalaman kerja yang relevan, dan keterlibatan aktif dalam kegiatan kemasyarakatan dan
                            pengembangan potensi diri. Alumni siap kerja, siap kuliah dan siap berwirausaha.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid"
                        src="{{ asset('themes/frontend/assets/img/about/5.jpeg')}}" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Beragam Program Beasiswa</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-light">Beasiswa untuk siswa SMK tersedia dari berbagai pihak, seperti
                            pemerintah, yayasan, perusahaan, dan sekolah sendiri, seperti Beasiswa DJITU, Beasiswa
                            Pendidikan Indonesia (BPI) Kemendikbudristek, Beasiswa Indonesia Bangkit, Beasiswa
                            Amartha Cendekia, dan Beasiswa Prestasi Kita.
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

@endsection