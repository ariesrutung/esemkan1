<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $fasilitas = [
            ['nama' => 'Lab. Komputer', 'jumlah' => 3, 'foto' => 'campus-1.webp', 'deskripsi' => 'Laboratorium komputer dilengkapi dengan perangkat keras dan lunak untuk mendukung pembelajaran teknologi informasi.'],
            ['nama' => 'Perpustakaan', 'jumlah' => 1, 'foto' => 'campus-2.webp', 'deskripsi' => 'Perpustakaan menyediakan berbagai koleksi buku pelajaran, referensi, dan literatur umum bagi siswa dan guru.'],
            ['nama' => 'Ruang Kelas', 'jumlah' => 20, 'foto' => 'campus-3.webp', 'deskripsi' => 'Ruang kelas yang nyaman dan representatif mendukung proses belajar mengajar yang efektif.'],
            ['nama' => 'Lapangan', 'jumlah' => 1, 'foto' => 'campus-4.webp', 'deskripsi' => 'Lapangan serbaguna digunakan untuk kegiatan olahraga, upacara, dan aktivitas luar ruang lainnya.'],
            ['nama' => 'Ruang Guru', 'jumlah' => 1, 'foto' => 'campus-5.webp', 'deskripsi' => 'Ruang guru sebagai tempat para pendidik berdiskusi, beristirahat, dan menyusun rencana pembelajaran.'],
            ['nama' => 'Ruang UKS', 'jumlah' => 1, 'foto' => 'campus-5.webp', 'deskripsi' => 'Unit Kesehatan Sekolah (UKS) digunakan untuk pertolongan pertama dan pelayanan kesehatan ringan bagi siswa.'],
            ['nama' => 'Kantin', 'jumlah' => 1, 'foto' => 'campus-6.webp', 'deskripsi' => 'Kantin sekolah menyediakan makanan dan minuman yang sehat dan higienis untuk siswa dan staf.'],
            ['nama' => 'Mushola', 'jumlah' => 1, 'foto' => 'campus-6.webp', 'deskripsi' => 'Mushola digunakan untuk kegiatan ibadah dan pengembangan spiritual siswa.'],
            ['nama' => 'Parkiran', 'jumlah' => 2, 'foto' => 'campus-7.webp', 'deskripsi' => 'Area parkir luas dan aman tersedia untuk kendaraan siswa, guru, dan tamu sekolah.'],
            ['nama' => 'Toilet Siswa', 'jumlah' => 4, 'foto' => 'campus-7.webp', 'deskripsi' => 'Fasilitas toilet yang bersih dan layak guna menjaga kebersihan dan kenyamanan siswa.'],
            ['nama' => 'Ruang TU', 'jumlah' => 1, 'foto' => 'campus-8.webp', 'deskripsi' => 'Ruang Tata Usaha melayani administrasi dan kebutuhan operasional sekolah.'],
            ['nama' => 'Ruang Kepala Sekolah', 'jumlah' => 1, 'foto' => 'campus-8.webp', 'deskripsi' => 'Ruang kerja Kepala Sekolah untuk menjalankan fungsi kepemimpinan dan manajemen sekolah.'],
            ['nama' => 'Lab Fisika', 'jumlah' => 1, 'foto' => 'campus-7.webp', 'deskripsi' => 'Laboratorium Fisika dilengkapi alat-alat praktikum untuk mendukung pembelajaran sains.'],
            ['nama' => 'Lab Kimia', 'jumlah' => 1, 'foto' => 'campus-1.webp', 'deskripsi' => 'Laboratorium Kimia digunakan untuk praktikum dan eksperimen kimia dasar dan lanjutan.'],
            ['nama' => 'Lab Biologi', 'jumlah' => 1, 'foto' => 'campus-2.webp', 'deskripsi' => 'Laboratorium Biologi menyediakan alat peraga dan mikroskop untuk mempelajari makhluk hidup.'],
            ['nama' => 'Gedung Serbaguna', 'jumlah' => 1, 'foto' => 'campus-1.webp', 'deskripsi' => 'Gedung serbaguna digunakan untuk kegiatan sekolah seperti seminar, pertunjukan, dan rapat.'],
            ['nama' => 'Ruang BK', 'jumlah' => 1, 'foto' => 'campus-3.webp', 'deskripsi' => 'Ruang Bimbingan dan Konseling untuk layanan konseling siswa dalam aspek akademik maupun non-akademik.'],
            ['nama' => 'Ruang OSIS', 'jumlah' => 1, 'foto' => 'campus-4.webp', 'deskripsi' => 'Ruang OSIS sebagai pusat kegiatan organisasi siswa intra sekolah.'],
            ['nama' => 'Ruang Ekskul', 'jumlah' => 2, 'foto' => 'campus-9.webp', 'deskripsi' => 'Ruang ekstrakurikuler digunakan untuk mendukung berbagai kegiatan minat dan bakat siswa.'],
        ];

        foreach ($fasilitas as $item) {
            Fasilitas::create($item);
        }
    }
}
