@extends('wp-public.layouts.app')
@section('content')

<section id="admissions" class="admissions section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="row gy-5 g-lg-5">
            <div class="col-lg-6">
                <div class="admissions-info" data-aos="fade-up">
                    <h2>Mulai Academic Journey Anda Hari Ini Bersama Kami</h2>
                    <p>Yuk! Pastikan Anda mencatat jadwal pendaftaran yang dikeluarkan secara resmi oleh sekolah.</p>
                    </p>
                    <div class="cta-wrapper mt-3" data-aos="fade-up">
                        <div class="row g-0">
                            <div class="col-md-12 cta-item apply p-3 rounded">
                                <div class="row">
                                    <div class="col-lg-6 d-flex align-items-center">
                                        <p class="p-0 m-0">Tunggu apa lagi, yuk gabung sekarang?</p>
                                    </div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <a href="#persyaratanRegistrasi" class="btn btn-primary">Prosedur Registrasi</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="persyaratanRegistrasi" class="admissions-steps mt-5">
                        <h3>Persyaratan Pendaftaran</h3>
                        <div class="steps-wrapper mt-4">
                            <div class="step-item" data-aos="fade-up" data-aos-delay="100">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h4>Surat Keterangan Lulus/SKHU/Ijazah</h4>
                                    <p>Siapkan dokumen Surat Keterangan Lulus, SKHU, atau Ijazah terakhir sebagai bukti
                                        bahwa Anda telah
                                        menyelesaikan jenjang pendidikan sebelumnya. Dokumen ini akan digunakan untuk
                                        verifikasi kelulusan saat
                                        proses seleksi.</p>
                                </div>
                            </div>

                            <div class="step-item" data-aos="fade-up" data-aos-delay="200">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h4>Foto Copy KTP Orang Tua</h4>
                                    <p>Fotokopi KTP orang tua diperlukan sebagai data identitas wali atau penanggung
                                        jawab. Pastikan dokumen
                                        terbaca dengan jelas dan masih berlaku.</p>
                                </div>
                            </div>

                            <div class="step-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h4>Foto Copy Kartu Keluarga</h4>
                                    <p>Gunakan fotokopi Kartu Keluarga untuk membuktikan hubungan keluarga dan alamat
                                        domisili. Data ini juga
                                        akan digunakan untuk pencocokan data pribadi calon peserta.</p>
                                </div>
                            </div>

                            <div class="step-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="step-number">4</div>
                                <div class="step-content">
                                    <h4>Pas Foto 4x6 Berwarna (2 Lembar)</h4>
                                    <p>Siapkan dua lembar pas foto ukuran 4x6 cm berwarna dengan latar belakang polos.
                                        Foto akan digunakan untuk
                                        keperluan administrasi dan pencetakan kartu peserta.</p>
                                </div>
                            </div>

                            <div class="step-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="step-number">5</div>
                                <div class="step-content">
                                    <h4>Foto Copy Akta Kelahiran</h4>
                                    <p>Fotokopi akta kelahiran digunakan untuk verifikasi data tanggal lahir dan
                                        identitas resmi peserta.
                                        Pastikan nama dan tanggal lahir sesuai dengan dokumen lainnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="admissions-requirements p-3" data-aos="fade-up">
                    <img class="img-fluid rounded" src="{{ asset('themes/frontend/assets/img/submission/brosur.jpg')}}"
                        alt="" />
                </div>
            </div>

            <div class="cta-wrapper mt-5" data-aos="fade-up">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="cta-item tour">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h3>Lokasi Pendaftaran</h3>
                            <p class="fs-6 fw-bold">Aula SMK Negeri 1 Manokwari</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cta-item apply">
                            <i class="bi bi-whatsapp"></i>
                            <h3>Informasi Kontak</h3>
                            <p class="fs-6 fw-bold">+62 852-4340-0430</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection