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
                'nama' => 'Akuntansi',
                'slug' => 'akuntansi',
                'kode' => 'AK',
                'deskripsi' => 'Program keahlian yang membekali peserta didik dengan kompetensi dalam pencatatan transaksi keuangan, penyusunan laporan keuangan, serta dasar-dasar perpajakan dan akuntansi komputer.',
                'gambar' => 'akuntansi.webp',
            ],
            [
                'nama' => 'Layanan Perbankan',
                'slug' => 'layanan-perbankan',
                'kode' => 'LP',
                'deskripsi' => 'Program keahlian yang mempersiapkan siswa untuk memiliki kemampuan dalam pelayanan nasabah, administrasi produk perbankan, serta memahami sistem dan regulasi keuangan perbankan.',
                'gambar' => 'perbankan.webp',
            ],
            [
                'nama' => 'Manajemen Perkantoran',
                'slug' => 'manajemen-perkantoran',
                'kode' => 'MP',
                'deskripsi' => 'Program keahlian yang mengajarkan keterampilan administrasi perkantoran, pengelolaan dokumen, layanan informasi, serta penggunaan teknologi perkantoran secara profesional.',
                'gambar' => 'perkantoran.webp',
            ],
            [
                'nama' => 'Manajemen Logistik',
                'slug' => 'manajemen-logistik',
                'kode' => 'ML',
                'deskripsi' => 'Program keahlian yang membekali peserta didik dengan kemampuan dalam pengelolaan gudang, distribusi barang, rantai pasok (supply chain), serta sistem informasi logistik.',
                'gambar' => 'logistik.webp',
            ],
            [
                'nama' => 'Bisnis Ritel',
                'slug' => 'bisnis-ritel',
                'kode' => 'BR',
                'deskripsi' => 'Program keahlian yang fokus pada pengelolaan toko, pemasaran produk, pelayanan pelanggan, serta operasional bisnis ritel modern maupun tradisional.',
                'gambar' => 'ritel.webp',
            ],
            [
                'nama' => 'Usaha Layanan Pariwisata',
                'slug' => 'usaha-layanan-pariwisata',
                'kode' => 'ULP',
                'deskripsi' => 'Program keahlian yang mengembangkan kompetensi dalam pelayanan wisata, pengelolaan perjalanan, ticketing, serta hospitality untuk mendukung industri pariwisata.',
                'gambar' => 'pariwisata.webp',
            ],
        ];

        foreach ($jurusanList as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
