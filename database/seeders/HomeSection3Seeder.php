<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSection3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_section3')->insert([
            [
                'key' => 'title',
                'value' => 'Welcome to Our School Website!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'subtitle',
                'value' => 'Percayakan Masa Depan Anak Anda di Tangan Kami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button1_name',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button1_link',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button2_name',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'button2_link',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit1_icon',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit1_title',
                'value' => 'Fasilitas Lengkap',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit1_subtitle',
                'value' => 'Penunjang belajar dengan kualitas premium.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit2_icon',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit2_title',
                'value' => 'Lingkungan Nyaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit2_subtitle',
                'value' => 'Berada di lingkungan yang asri, aman, dan kondusif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit3_icon',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit3_title',
                'value' => 'Pengajar Kompeten',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit3_subtitle',
                'value' => 'Guru yangup-to-date dengan perkembangan industri.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit4_icon',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit4_title',
                'value' => 'Kerjasama Luas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'benefit4_subtitle',
                'value' => 'Memperbesar kesempatan bekerja sebelum lulus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
