<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $jurusanList = [
            [
                'nama' => 'Perhotelan dan Jasa Pariwisata',
                'deskripsi' => 'Program keahlian yang mempersiapkan peserta didik untuk bekerja di industri perhotelan, pariwisata, dan pelayanan jasa terkait.',
                'gambar' => "activities-2.webp",
            ],
            [
                'nama' => 'Akuntansi dan Keuangan',
                'deskripsi' => 'Program keahlian yang berfokus pada pembelajaran akuntansi, pembukuan, perpajakan, dan manajemen keuangan.',
                'gambar' => "activities-4.webp",
            ],
            [
                'nama' => 'Bisnis dan Pemasaran',
                'deskripsi' => 'Program keahlian yang mengajarkan konsep dan praktik bisnis, pemasaran, kewirausahaan, serta manajemen usaha.',
                'gambar' => "activities-6.webp",
            ],
        ];

        foreach ($jurusanList as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
