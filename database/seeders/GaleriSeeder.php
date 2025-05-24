<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('galeri')->insert([
            [
                'judul' => 'Kegiatan Workshop Laravel',
                'deskripsi' => 'Workshop Laravel yang diikuti oleh siswa kelas XI.',
                'gambar' => 'students-1.webp',
                'tanggal' => Carbon::parse('2025-05-01'),
                'jam' => '09:00:00',
                'tempat' => 'Ruang Lab Komputer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pameran Karya Siswa',
                'deskripsi' => 'Menampilkan karya terbaik siswa jurusan RPL.',
                'gambar' => 'students-2.webp',
                'tanggal' => Carbon::parse('2025-05-10'),
                'jam' => '13:30:00',
                'tempat' => 'Aula Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Kunjungan Industri',
                'deskripsi' => 'Kunjungan ke perusahaan teknologi di Jakarta.',
                'gambar' => 'students-3.webp',
                'tanggal' => Carbon::parse('2025-06-05'),
                'jam' => '08:00:00',
                'tempat' => 'PT Teknologi Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Kunjungan Kementerian',
                'deskripsi' => 'Kunjungan menteri Pendidikan Pemuda dan Olahraga RI',
                'gambar' => 'students-4.webp',
                'tanggal' => Carbon::parse('2025-06-05'),
                'jam' => '08:00:00',
                'tempat' => 'SMK Ngeri 1 Manokwari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
