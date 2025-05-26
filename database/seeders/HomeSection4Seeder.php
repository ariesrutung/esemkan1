<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSection4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_section4')->insert([
            [
                'key' => 'title',
                'value' => 'Program Keahlian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'subtitle',
                'value' => 'Program Keahlian',
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
