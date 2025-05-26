<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pkl;

class PklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pklList = [
            [
                'judul' => 'Dokumentasi Kegiatan PKL',
                'deskripsi' => 'Program keahlian yang membekali peserta didik dengan kompetensi dalam pencatatan transaksi keuangan, penyusunan laporan keuangan, serta dasar-dasar perpajakan dan akuntansi komputer.',
                'link' => 'AK',
                'gambar' => 'akuntansi.webp',
            ],
            [
                'judul' => 'Dokumentasi Pembekalan PKL',
                'deskripsi' => 'Program keahlian yang mempersiapkan siswa untuk memiliki kemampuan dalam pelayanan nasabah, administrasi produk perbankan, serta memahami sistem dan regulasi keuangan perbankan.',
                'link' => 'LP',
                'gambar' => 'perbankan.webp',
            ],
            [
                'judul' => 'Jurnal PKL SMK Negeri 1 Manokwari',
                'deskripsi' => 'Program keahlian yang mengajarkan keterampilan administrasi perkantoran, pengelolaan dokumen, layanan informasi, serta penggunaan teknologi perkantoran secara profesional.',
                'link' => 'MP',
                'gambar' => 'perkantoran.webp',
            ],
            [
                'judul' => 'Dokumen Monitoring PKL',
                'deskripsi' => 'Program keahlian yang membekali peserta didik dengan kemampuan dalam pengelolaan gudang, distribusi barang, rantai pasok (supply chain), serta sistem informasi logistik.',
                'link' => 'ML',
                'gambar' => 'logistik.webp',
            ],
            [
                'judul' => 'Pembagian Tempat PKL',
                'deskripsi' => 'Program keahlian yang fokus pada pengelolaan toko, pemasaran produk, pelayanan pelanggan, serta operasional bisnis ritel modern maupun tradisional.',
                'link' => 'BR',
                'gambar' => 'ritel.webp',
            ],
            [
                'judul' => 'Penarikan Peserta PKL',
                'deskripsi' => 'Program keahlian yang mengembangkan kompetensi dalam pelayanan wisata, pengelolaan perjalanan, ticketing, serta hospitality untuk mendukung industri pariwisata.',
                'link' => 'ULP',
                'gambar' => 'pariwisata.webp',
            ],
        ];

        foreach ($pklList as $pkl) {
            Pkl::create($pkl);
        }
    }
}
