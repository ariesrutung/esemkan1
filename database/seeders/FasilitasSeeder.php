<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        $fasilitas = [
            ['nama' => 'Laboratorium Komputer', 'jumlah' => 3, 'foto' => 'fasilitas/lab-komputer.jpg'],
            ['nama' => 'Perpustakaan', 'jumlah' => 1, 'foto' => 'fasilitas/perpustakaan.jpg'],
            ['nama' => 'Ruang Kelas', 'jumlah' => 20, 'foto' => 'fasilitas/ruang-kelas.jpg'],
            ['nama' => 'Lapangan Olahraga', 'jumlah' => 1, 'foto' => 'fasilitas/lapangan.jpg'],
            ['nama' => 'Ruang Guru', 'jumlah' => 1, 'foto' => 'fasilitas/ruang-guru.jpg'],
            ['nama' => 'Ruang UKS', 'jumlah' => 1, 'foto' => 'fasilitas/uks.jpg'],
            ['nama' => 'Kantin', 'jumlah' => 1, 'foto' => 'fasilitas/kantin.jpg'],
            ['nama' => 'Mushola', 'jumlah' => 1, 'foto' => 'fasilitas/mushola.jpg'],
            ['nama' => 'Parkiran', 'jumlah' => 2, 'foto' => 'fasilitas/parkiran.jpg'],
            ['nama' => 'Toilet Siswa', 'jumlah' => 4, 'foto' => 'fasilitas/toilet.jpg'],
            ['nama' => 'Ruang TU', 'jumlah' => 1, 'foto' => 'fasilitas/ruang-tu.jpg'],
            ['nama' => 'Ruang Kepala Sekolah', 'jumlah' => 1, 'foto' => 'fasilitas/ruang-kepsek.jpg'],
            ['nama' => 'Ruang Multimedia', 'jumlah' => 2, 'foto' => 'fasilitas/multimedia.jpg'],
            ['nama' => 'Ruang Audio Visual', 'jumlah' => 1, 'foto' => 'fasilitas/audio-visual.jpg'],
            ['nama' => 'Lab Fisika', 'jumlah' => 1, 'foto' => 'fasilitas/lab-fisika.jpg'],
            ['nama' => 'Lab Kimia', 'jumlah' => 1, 'foto' => 'fasilitas/lab-kimia.jpg'],
            ['nama' => 'Lab Biologi', 'jumlah' => 1, 'foto' => 'fasilitas/lab-biologi.jpg'],
            ['nama' => 'Studio Musik', 'jumlah' => 1, 'foto' => 'fasilitas/studio-musik.jpg'],
            ['nama' => 'Studio Broadcasting', 'jumlah' => 1, 'foto' => 'fasilitas/studio-broadcast.jpg'],
            ['nama' => 'Green House', 'jumlah' => 1, 'foto' => 'fasilitas/green-house.jpg'],
            ['nama' => 'Gedung Serbaguna', 'jumlah' => 1, 'foto' => 'fasilitas/gedung-serbaguna.jpg'],
            ['nama' => 'Ruang Bimbingan Konseling', 'jumlah' => 1, 'foto' => 'fasilitas/bk.jpg'],
            ['nama' => 'Ruang OSIS', 'jumlah' => 1, 'foto' => 'fasilitas/osis.jpg'],
            ['nama' => 'Ruang Ekstrakurikuler', 'jumlah' => 2, 'foto' => 'fasilitas/ekskul.jpg'],
            ['nama' => 'Taman Sekolah', 'jumlah' => 3, 'foto' => 'fasilitas/taman.jpg'],
        ];

        foreach ($fasilitas as $item) {
            Fasilitas::create($item);
        }
    }
}
