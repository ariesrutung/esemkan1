<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Mapel Umum
            [
                'nama' => 'Matematika',
                'kode' => 'MAT001',
                'deskripsi' => 'Mempelajari logika, aljabar, dan geometri.',
            ],
            [
                'nama' => 'Bahasa Indonesia',
                'kode' => 'BIN001',
                'deskripsi' => 'Pembelajaran tata bahasa dan sastra Indonesia.',
            ],
            [
                'nama' => 'Fisika',
                'kode' => 'FIS001',
                'deskripsi' => 'Mempelajari fenomena alam dan hukum fisika.',
            ],
            [
                'nama' => 'Biologi',
                'kode' => 'BIO001',
                'deskripsi' => 'Studi tentang makhluk hidup dan ekosistem.',
            ],
            [
                'nama' => 'Bahasa Inggris',
                'kode' => 'ING001',
                'deskripsi' => 'Pengembangan keterampilan berbahasa Inggris.',
            ],
            [
                'nama' => 'Pendidikan Pancasila dan Kewarganegaraan',
                'kode' => 'PPKN001',
                'deskripsi' => 'Pembelajaran dasar negara dan kewarganegaraan.',
            ],
            [
                'nama' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'kode' => 'PJOK001',
                'deskripsi' => 'Aktivitas fisik dan pemahaman hidup sehat.',
            ],
            [
                'nama' => 'Sejarah Indonesia',
                'kode' => 'SEJ001',
                'deskripsi' => 'Pembelajaran sejarah bangsa Indonesia.',
            ],
            [
                'nama' => 'Informatika',
                'kode' => 'INF001',
                'deskripsi' => 'Dasar-dasar teknologi informasi dan komunikasi.',
            ],

            // Konsentrasi: Perhotelan & Jasa Pariwisata
            [
                'nama' => 'Dasar-dasar Perhotelan',
                'kode' => 'PH001',
                'deskripsi' => 'Pengenalan industri perhotelan dan operasional hotel.',
            ],
            [
                'nama' => 'Layanan Front Office',
                'kode' => 'PH002',
                'deskripsi' => 'Pelayanan tamu di bagian resepsionis hotel.',
            ],
            [
                'nama' => 'Layanan Housekeeping',
                'kode' => 'PH003',
                'deskripsi' => 'Pembersihan kamar dan area publik hotel.',
            ],
            [
                'nama' => 'Produk Kreatif dan Kewirausahaan',
                'kode' => 'PKK001',
                'deskripsi' => 'Pengembangan produk dan jiwa wirausaha.',
            ],

            // Konsentrasi: Akuntansi & Keuangan
            [
                'nama' => 'Dasar-dasar Akuntansi',
                'kode' => 'AK001',
                'deskripsi' => 'Konsep dasar pencatatan keuangan.',
            ],
            [
                'nama' => 'Praktikum Akuntansi Perusahaan Jasa dan Dagang',
                'kode' => 'AK002',
                'deskripsi' => 'Penerapan akuntansi pada perusahaan jasa & dagang.',
            ],
            [
                'nama' => 'Aplikasi Pengolah Angka (Spreadsheet)',
                'kode' => 'AK003',
                'deskripsi' => 'Mengolah data keuangan dengan spreadsheet.',
            ],
            [
                'nama' => 'Administrasi Pajak',
                'kode' => 'AK004',
                'deskripsi' => 'Pengelolaan dan pelaporan pajak usaha.',
            ],

            // Konsentrasi: Bisnis & Pemasaran
            [
                'nama' => 'Dasar-dasar Pemasaran',
                'kode' => 'PM001',
                'deskripsi' => 'Konsep dasar dan strategi pemasaran.',
            ],
            [
                'nama' => 'Administrasi Transaksi',
                'kode' => 'PM002',
                'deskripsi' => 'Pencatatan dan pengelolaan transaksi bisnis.',
            ],
            [
                'nama' => 'Komunikasi Bisnis',
                'kode' => 'PM003',
                'deskripsi' => 'Strategi komunikasi dalam dunia usaha.',
            ],
            [
                'nama' => 'E-Commerce',
                'kode' => 'PM004',
                'deskripsi' => 'Dasar-dasar perdagangan elektronik dan pemasaran digital.',
            ],
        ];


        foreach ($data as $subject) {
            Subject::create($subject);
        }
    }
}
