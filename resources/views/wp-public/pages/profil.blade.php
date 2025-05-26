@extends('wp-public.layouts.app')
@section('content')
<section id="history" class="history section mt-5">
    <div class="container mt-5" data-aos="fade-down" data-aos-delay="100">
        <div class="row align-items-top g-5">
            <div class="col-lg-6">
                <div class="about-content card-profil" data-aos="fade-down" data-aos-delay="200">
                    <h3>Profil</h3>
                    <h2>{{ $identities['nama'] ?? 'Judul Sekolah' }}</h2>
                    <p>
                        {{ $identities['short_desc'] ?? 'Deskripsi Singkat Sekolah' }}
                    </p>

                    <div class="row">
                        <div class="col-lg-12">
                            <table>
                                <tbody>
                                    @php
                                    $fields = [
                                    'nama' => 'Nama',
                                    'npsn' => 'NPSN',
                                    'alamat' => 'Alamat',
                                    'status_sekolah' => 'Status Sekolah',
                                    'bentuk_pendidikan' => 'Bentuk Pendidikan',
                                    'jenjang_pendidikan' => 'Jenjang Pendidikan',
                                    'kementerian_pembina' => 'Kementerian Pembina',
                                    'naungan' => 'Naungan',
                                    'no_sk_pendirian' => 'No. SK. Pendirian',
                                    'tanggal_sk_pendirian' => 'Tanggal SK. Pendirian',
                                    'nomor_sk_operasional' => 'Nomor SK Operasional',
                                    'tanggal_sk_operasional' => 'Tanggal SK Operasional',
                                    'tanggal_upload_sk_operasional' => 'Tanggal Upload SK Op.',
                                    'akreditasi' => 'Akreditasi',
                                    'luas_tanah' => 'Luas Tanah',
                                    'sumber_listrik' => 'Sumber Listrik',
                                    'fax' => 'Fax',
                                    'telepon' => 'Telepon',
                                    'email' => 'Email',
                                    'operator' => 'Operator',
                                    'lintang' => 'Lintang',
                                    'bujur' => 'Bujur'
                                    ];
                                    @endphp

                                    @foreach($fields as $key => $label)
                                    <tr>
                                        <td class="w-35">{{ $label }}</td>
                                        <td>:</td>
                                        <td>{!! $identities[$key] ?? '-' !!}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('themes/frontend/assets/img/education/' . $identities['dok_akreditasi']?? 'Akreditasi Sekolah') }}"
                        alt="Akreditasi Sekolah" class="img-fluid rounded">
                    <div class="mission-vision" data-aos="fade-up" data-aos-delay="400">
                        <div class="mission">
                            <h3>SK Operasional</h3>
                            <p class="text-muted">Unduh file SK Operasional melalui tombol di bawah ini.</p>
                            <a href="{{ asset('themes/frontend/assets/img/files/' . $identities['sk_op'] ?? 'SK Operasional') }}"
                                class="btn btn-sm btn-outline-primary" target="_blank">Unduh</a>
                        </div>

                        <div class="vision">
                            <h3>Akreditasi</h3>
                            <div class="col-md-10">
                                <p class="text-muted">Unduh file Sertifikat Akreditas melalui tombol di bawah ini.
                                </p>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ asset('themes/frontend/assets/img/files/' . $identities['sert_akreditasi'] ?? 'Sertifikat Akreditasi Sekolah') }}"
                                    class="btn btn-sm btn-outline-primary" target="_blank">Unduh</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="core-values" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-center mb-4">Visi, Misi & Tujuan</h3>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
                        <div class="col">
                            <div class="value-card p-0">
                                <img src="{{ asset('themes/frontend/assets/img/' . $identities['visi']?? 'Visi Sekolah') }}"
                                    alt="VisiMisi" class="img-fluid rounded">
                            </div>
                        </div>

                        <div class="col">
                            <div class="value-card">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse1" aria-expanded="true"
                                                aria-controls="collapse1">
                                                Menanamkan Nilai Keimanan
                                            </button>
                                        </h2>
                                        <div id="collapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading1">
                                            <div class="accordion-body">
                                                Menanamkan keimanan dan ketaqwaan kepada Tuhan Yang Maha Esa.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                aria-expanded="false" aria-controls="collapse2">
                                                Menyelenggarakan Diklat Sesuai Standar Nasional Pendidikan
                                            </button>
                                        </h2>
                                        <div id="collapse2" class="accordion-collapse collapse"
                                            aria-labelledby="heading2">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Menyiapkan peserta didik agar menjadi manusia produktif,
                                                        mampu
                                                        bekerja mandiri, dan mengisi
                                                        lowongan pekerjaan di dunia usaha dan industri sebagai
                                                        tenaga kerja
                                                        tingkat menengah sesuai
                                                        kompetensi program keahlian.</li>
                                                    <li>Membekali peserta didik dengan ilmu pengetahuan,
                                                        teknologi, dan seni
                                                        agar mampu mengembangkan
                                                        diri secara mandiri maupun melalui jenjang pendidikan
                                                        yang lebih
                                                        tinggi.</li>
                                                    <li>Membekali peserta didik dengan kompetensi-kompetensi
                                                        yang sesuai
                                                        dengan program keahlian yang
                                                        dipilih.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                aria-expanded="false" aria-controls="collapse3">
                                                Menyelenggarakan Administrasi Efektif dan Akuntabel
                                            </button>
                                        </h2>
                                        <div id="collapse3" class="accordion-collapse collapse"
                                            aria-labelledby="heading3">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Menyelenggarakan administrasi sekolah secara bertanggung
                                                        jawab dan
                                                        bermutu.</li>
                                                    <li>Menyelenggarakan administrasi dengan memanfaatkan
                                                        teknologi.</li>
                                                    <li>Memberikan layanan administrasi secara cepat dan
                                                        efektif.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse4"
                                                aria-expanded="false" aria-controls="collapse4">
                                                Mengembangkan Kurikulum Sesuai Kebutuhan
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse"
                                            aria-labelledby="heading4">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Membentuk Tim Pengembang Kurikulum yang memiliki
                                                        komitmen kuat untuk
                                                        menciptakan lulusan
                                                        berkualitas, berdaya saing, dan berprestasi.</li>
                                                    <li>Menyiapkan kurikulum dan standar pelayanan minimal agar
                                                        peserta
                                                        didik mampu memilih karier,
                                                        gigih berkompetisi, beradaptasi di dunia kerja, dan
                                                        bersikap
                                                        profesional dalam bidang yang
                                                        diminati.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse5"
                                                aria-expanded="false" aria-controls="collapse5">
                                                Mengembangkan Jaringan dan Kemitraan
                                            </button>
                                        </h2>
                                        <div id="collapse5" class="accordion-collapse collapse"
                                            aria-labelledby="heading5">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Membangun hubungan harmonis dengan masyarakat, dunia
                                                        usaha, dunia
                                                        industri, dan pemerintah.</li>
                                                    <li>Membangun kemitraan dengan lembaga swasta dan pemerintah
                                                        untuk
                                                        mendukung program sekolah.</li>
                                                    <li>Membangun jaringan komunikasi dengan pihak lain untuk
                                                        membangun
                                                        kompetensi sekolah dan warga
                                                        sekolah.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading6">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse6"
                                                aria-expanded="false" aria-controls="collapse6">
                                                Meningkatkan Citra Positif Sekolah
                                            </button>
                                        </h2>
                                        <div id="collapse6" class="accordion-collapse collapse"
                                            aria-labelledby="heading6">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Menciptakan dan menampilkan ikon sekolah yang
                                                        mencerminkan budaya
                                                        Papua Barat.</li>
                                                    <li>Membangun kultur positif bagi warga sekolah, khususnya
                                                        budaya Papua
                                                        Barat.</li>
                                                    <li>Membangun tradisi yang mendorong terciptanya sekolah
                                                        efektif.</li>
                                                    <li>Mengembangkan budaya mutu di lingkungan sekolah.</li>
                                                    <li>Mengkreasi semboyan/slogan dan membangun jati diri yang
                                                        positif.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading7">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse7"
                                                aria-expanded="false" aria-controls="collapse7">
                                                Menciptakan Lingkungan Bersih dan Sehat Bercirikan Budaya
                                            </button>
                                        </h2>
                                        <div id="collapse7" class="accordion-collapse collapse"
                                            aria-labelledby="heading7">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Membiasakan warga sekolah membuang sampah pada
                                                        tempatnya.</li>
                                                    <li>Merawat dan menjaga kebersihan lingkungan sekolah.</li>
                                                    <li>Mengadakan penghijauan di sekitar lingkungan sekolah.
                                                    </li>
                                                    <li>Melestarikan budaya Papua di lingkungan sekolah.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection