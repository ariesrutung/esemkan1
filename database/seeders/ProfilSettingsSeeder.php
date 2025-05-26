<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profil_settings')->insert([
            [
                'key' => 'title',
                'value' => 'Informasi Terbaru',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'short_desciption',
                'value' => 'Membangun Generasi Unggul dengan Ilmu dan Karakter.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'dok_akreditasi',
                'value' => 'Membangun Generasi Unggul dengan Ilmu dan Karakter.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'link_kreditasi',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'link_skoperasional',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'dok_visimisi',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
