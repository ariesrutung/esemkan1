<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class InformasiSeeder extends Seeder
{
    public function run(): void
    {
        $tempatList = ['Aula Utama', 'Lapangan Sekolah', 'Ruang Rapat', 'Gedung Serbaguna', 'Online via Zoom'];
        $judulList = ['Rapat Orang Tua', 'Pengambilan Raport', 'Pelatihan Guru', 'Peringatan Hari Besar', 'Lomba Kebersihan'];
        $kategoriList = ['pengumuman', 'berita', 'event'];

        $data = [];

        for ($i = 1; $i <= 30; $i++) {
            $judul = $judulList[array_rand($judulList)];
            $judulLengkap = $judul . ' #' . $i;
            $slug = Str::slug($judulLengkap . '-' . Str::random(5)); // Tambah random biar unik

            $deskripsi = "Ini adalah informasi untuk $judul.";
            $gambar = rand(1, 10);
            $tanggal = Carbon::now()->addDays(rand(1, 60));
            $jam = Carbon::createFromTime(rand(7, 15), rand(0, 30), 0)->format('H:i:s');
            $tempat = $tempatList[array_rand($tempatList)];
            $kategori = $kategoriList[array_rand($kategoriList)];

            $data[] = [
                'judul' => $judulLengkap,
                'slug' => $slug,
                'deskripsi' => $deskripsi,
                'gambar' => $gambar,
                'tanggal' => $tanggal,
                'jam' => $jam,
                'tempat' => $tempat,
                'kategori' => $kategori,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('informasi')->insert($data);
    }
}
