<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSection1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_section1')->insert([
            [
                'key' => 'greeting',
                'value' => 'Welcome to Our School Website!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'tagline',
                'value' => 'Membangun Generasi Unggul dengan Ilmu dan Karakter.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button_name',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button_link',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'running_text',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
