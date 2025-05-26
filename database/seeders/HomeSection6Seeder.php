<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSection6Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_section6')->insert([
            [
                'key' => 'title',
                'value' => 'Galeri Sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'subtitle',
                'value' => 'Membangun Generasi Unggul dengan Ilmu dan Karakter.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button_title',
                'value' => 'Membangun Generasi Unggul dengan Ilmu dan Karakter.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button_link',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
