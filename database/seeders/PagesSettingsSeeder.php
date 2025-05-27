<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages_settings')->insert([
            [
                'key' => 'home_section1_greetings',
                'value' => 'Welcome to Our School Website!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section1_tagline',
                'value' => 'Membangun Generasi Unggul dengan Ilmu dan Karakter.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section1_button_name',
                'value' => 'INFO PPDB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section1_button_link',
                'value' => '/spmb',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section1_running_text',
                'value' => 'SELAMAT DATANG DI WEBSITE RESMI MILIK SMK NEGERI 1 MANOKWARI | DAPATKAN INFORMASI TERBARU SEPUTARAN SPMB DENGA MENGUNJUNGI MENU SPMB WEBSITE INI.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'home_section2_title',
                'value' => 'Selamat Datang di',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section2_sambutan',
                'value' => 'Dengan bangga kami sambut seluruh siswa, orang tua, serta mitra pendidikan di SMK Negeri 1 Manokwari, sekolah yang berkomitmen mencetak generasi unggul di bidang manajemen, bisnis, dan teknologi.
Mengusung tagline "Smart, Professional, Entrepreneurial", kami terus menghadirkan pendidikan yang relevan dengan kebutuhan dunia kerja dan industri masa kini. Kami percaya bahwa sinergi antara pendidikan dan dunia industri adalah kunci untuk menciptakan lulusan yang siap bersaing secara global, baik dari segi keterampilan teknis, jiwa kepemimpinan, maupun soft skill yang mumpuni.
SMK Negeri 1 Manokwari memiliki visi menjadi SMK unggulan di bidang manajemen dan bisnis yang berbasis digital dan berkarakter, dengan semangat profesionalisme, inovasi, dan kemitraan. Untuk mewujudkannya, kami terus berupaya membekali peserta didik dengan kompetensi sesuai program keahlian, membentuk karakter wirausaha, serta menjalin kolaborasi strategis dengan dunia usaha dan dunia industri.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section2_writer',
                'value' => 'Naftali Rumbino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section2_jabatan',
                'value' => 'Kepala SMKN 1 Manokwari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section2_picture_1',
                'value' => 'halaman-smkn1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section2_picture_2',
                'value' => 'halaman1_smkn1.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'home_section3_title',
                'value' => 'Percayakan Masa Depan Anak Anda di Tangan Kami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_subtitle',
                'value' => 'Sekolah dengan fasilitas lengkap dan tenaga pendidik yang up-to-date dengan perkembangan teknologi siap mengantar Anda ke pintu gerbang kesuksesan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_button1_name',
                'value' => 'PROGRAM KEAHLIAN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_button1_link',
                'value' => '/program-keahlian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_button2_name',
                'value' => 'INFO PPDB',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_button2_link',
                'value' => '/spmb',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit1_icon',
                'value' => 'bi bi-people-fill',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit1_title',
                'value' => 'Fasilitas Lengkap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit1_subtitle',
                'value' => 'Penunjang belajar dengan kualitas premium.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit2_icon',
                'value' => 'bi bi-person-workspace',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit2_title',
                'value' => 'Lingkungan Nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit2_subtitle',
                'value' => 'Berada di lingkungan yang asri, aman, dan kondusif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit3_icon',
                'value' => 'bi bi-award',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit3_title',
                'value' => 'Pengajar Kompeten',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit3_subtitle',
                'value' => 'Guru yangup-to-date dengan perkembangan industri.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit4_icon',
                'value' => 'bi bi-cash-stack',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit4_title',
                'value' => 'Kerjasama Luas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section3_benefit4_subtitle',
                'value' => 'Memperbesar kesempatan bekerja sebelum lulus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'home_section4_title',
                'value' => 'Program Keahlian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section4_subtitle',
                'value' => 'Ragam Keahlian yang Siap Menghadapi Dunia Kerja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section4_button_title',
                'value' => 'Lihat Semua Program Keahlian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section4_button_link',
                'value' => '/program-keahlian',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'home_section5_title',
                'value' => 'Data Warga Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section5_subtitle',
                'value' => 'Statistik dan Informasi Warga Sekolah Terkini',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section5_murid',
                'value' => '561',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section5_guru',
                'value' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section5_tendik',
                'value' => '7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section5_rombel',
                'value' => '24',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'key' => 'home_section6_title',
                'value' => 'Galeri Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section6_subtitle',
                'value' => 'Album Kegiatan Akademik dan Non-Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section6_button_title',
                'value' => 'Lihat Semua Galeri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section6_button_link',
                'value' => '/galeri',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section7_title',
                'value' => 'Informasi Terbaru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section7_subtitle',
                'value' => 'Info Aktual untuk Warga Sekolah dan Masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section7_button_title',
                'value' => 'Lihat Semua Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'home_section7_button_link',
                'value' => '/informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // PROFIL
            [
                'key' => 'profil_title',
                'value' => 'Info',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'profil_short_desciption',
                'value' => 'SMK Negeri 1 Manokwari adalah institusi pendidikan menengah kejuruan yang berkomitmen mencetak lulusan siap kerja dengan kompetensi tinggi dan karakter unggul. Berlokasi strategis di kota Manokwari, sekolah ini menghadirkan pendidikan inovatif yang berorientasi pada dunia industri melalui program keahlian unggulan di bidang Perhotelan & Jasa Pariwisata, Akuntansi & Keuangan, serta Bisnis & Pemasaran.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'profil_dok_akreditasi',
                'value' => 'akreditasi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'profil_link_kreditasi',
                'value' => 'sert-akreditasi.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'profil_link_skoperasional',
                'value' => 'sk-operasional.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'profil_dok_visimisi',
                'value' => 'visimisi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // FASILITAS

            [
                'key' => 'fasilitas_title',
                'value' => 'Fasilitas Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'fasilitas_short_desciption',
                'value' => 'Temukan berbagai fasilitas unggulan yang kami sediakan untuk mendukung proses belajar mengajar yang nyaman, aman, dan inspiratif. Mulai dari ruang kelas modern, laboratorium lengkap, perpustakaan digital, hingga sarana olahraga dan seni yang representatif – semua dirancang untuk membentuk lingkungan belajar yang holistik dan menyenangkan bagi siswa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'fasilitas_gambar_1',
                'value' => 'campus-1.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'fasilitas_gabar2',
                'value' => 'campus-2.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'fasilitas_link_youtube',
                'value' => 'https://youtube.com/',
                'created_at' => now(),
                'updated_at' => now(),
            ],


            // PROGRAM KEAHLIAN
            [
                'key' => 'program_keahlian_title',
                'value' => 'Program Keahlian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'program_keahlian_short_desciption',
                'value' => 'Program Keahlian di sekolah kami dirancang untuk membekali siswa dengan pengetahuan dan keterampilan sesuai dengan kebutuhan dunia kerja dan perkembangan industri saat ini. Setiap program mengedepankan pembelajaran praktis, kurikulum berbasis kompetensi, serta dukungan dari tenaga pengajar profesional di bidangnya. Jelajahi berbagai pilihan jurusan yang kami tawarkan dan temukan potensi terbaik dalam diri Anda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // PKL
            [
                'key' => 'pkl_title',
                'value' => 'Praktik Kerja Lapangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'pkl_short_desciption',
                'value' => 'Praktik Kerja Lapangan (PKL) merupakan bagian penting dari proses pembelajaran yang memberikan kesempatan kepada siswa untuk merasakan langsung dunia kerja sesuai bidang keahlian mereka. Melalui PKL, siswa dapat mengasah keterampilan, membangun etos kerja, serta menambah wawasan dan pengalaman yang relevan sebagai bekal untuk karier di masa depan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // INFORMASI
            [
                'key' => 'informasi_title',
                'value' => 'Informasi Terbaru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'informasi_short_desciption',
                'value' => 'Dapatkan kabar dan pengumuman terkini seputar kegiatan sekolah, prestasi siswa, agenda penting, hingga perkembangan program pendidikan. Halaman ini disajikan untuk memastikan seluruh warga sekolah dan masyarakat selalu terhubung dengan informasi terbaru dari kami.

',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // SPMB
            [
                'key' => 'spmb_title',
                'value' => 'Mulai Academic Journey Anda Hari Ini Bersama Kami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_short_desciption',
                'value' => 'Yuk! Pastikan Anda mencatat jadwal pendaftaran yang dikeluarkan secara resmi oleh sekolah.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_button_tile',
                'value' => 'GABUNG SEKARANG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_button_link',
                'value' => '#link',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_title',
                'value' => 'Persyaratan Pendaftaran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_1',
                'value' => 'Surat Keterangan Lulus/SKHU/Ijazah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_1_desk',
                'value' => 'Siapkan dokumen Surat Keterangan Lulus, SKHU, atau Ijazah terakhir sebagai bukti bahwa Anda telah menyelesaikan jenjang pendidikan sebelumnya. Dokumen ini akan digunakan untuk verifikasi kelulusan saat proses seleksi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_2',
                'value' => 'Foto Copy KTP Orang Tua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_2_desk',
                'value' => 'Fotokopi KTP orang tua diperlukan sebagai data identitas wali atau penanggung jawab. Pastikan dokumen terbaca dengan jelas dan masih berlaku.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_3',
                'value' => 'Foto Copy Kartu Keluarga',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_3_desk',
                'value' => 'Gunakan fotokopi Kartu Keluarga untuk membuktikan hubungan keluarga dan alamat domisili. Data ini juga akan digunakan untuk pencocokan data pribadi calon peserta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_4',
                'value' => 'Pas Foto 4x6 Berwarna (2 Lembar)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_4_desk',
                'value' => 'Siapkan dua lembar pas foto ukuran 4x6 cm berwarna dengan latar belakang polos. Foto akan digunakan untuk keperluan administrasi dan pencetakan kartu peserta.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_5',
                'value' => 'Foto Copy Akta Kelahiran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_5_desk',
                'value' => 'Fotokopi akta kelahiran digunakan untuk verifikasi data tanggal lahir dan identitas resmi peserta. Pastikan nama dan tanggal lahir sesuai dengan dokumen lainnya.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_6',
                'value' => '-',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_syarat_6_desk',
                'value' => '-',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_gbr_brosur',
                'value' => 'brosur_1748232007.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_download_gbr_brosur',
                'value' => 'brosur_1748232007.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_lokasi',
                'value' => 'Aula SMK Negeri 1 Manokwari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'spmb_cp_wa',
                'value' => '+6281247775845',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
