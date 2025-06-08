<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatans = [
            // Struktural (Manajerial)
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Kepala Sekolah', 'kategori' => 'Struktural (Manajerial)'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Wakil Kepala Sekolah Bidang Kurikulum', 'kategori' => 'Struktural (Manajerial)'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Wakil Kepala Sekolah Bidang Kesiswaan', 'kategori' => 'Struktural (Manajerial)'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Wakil Kepala Sekolah Bidang Sarana dan Prasarana', 'kategori' => 'Struktural (Manajerial)'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Wakil Kepala Sekolah Bidang Humas', 'kategori' => 'Struktural (Manajerial)'],

            // Tenaga Kependidikan
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Kepala Tata Usaha', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Staf Tata Usaha', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Pustakawan', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Laboran', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Teknisi Laboratorium', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Petugas Perlengkapan', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Cleaning Service', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Satpam', 'kategori' => 'Tenaga Kependidikan'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Operator Sekolah', 'kategori' => 'Tenaga Kependidikan'],

            // Fungsional Non-Guru
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Konselor Sekolah', 'kategori' => 'Fungsional Non-Guru'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Pembina Ekstrakurikuler', 'kategori' => 'Fungsional Non-Guru'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Pembina OSIS', 'kategori' => 'Fungsional Non-Guru'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Pembimbing Pramuka', 'kategori' => 'Fungsional Non-Guru'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Koordinator UKS', 'kategori' => 'Fungsional Non-Guru'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Koordinator Literasi', 'kategori' => 'Fungsional Non-Guru'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Admin IT', 'kategori' => 'Fungsional Non-Guru'],

            // Khusus SMK
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Kepala Kompetensi Keahlian', 'kategori' => 'Khusus SMK'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Instruktur Industri', 'kategori' => 'Khusus SMK'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Koordinator PKL', 'kategori' => 'Khusus SMK'],
            ['nama_lengkap' => 'Saha Eta', 'nama_jabatan' => 'Koordinator Teaching Factory', 'kategori' => 'Khusus SMK'],
        ];

        DB::table('jabatan')->insert($jabatans);
    }
}
