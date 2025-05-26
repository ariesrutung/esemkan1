<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSection2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_section2')->insert([
            [
                'key' => 'title',
                'value' => 'Welcome to Our School Website!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'content',
                'value' => 'Dengan bangga kami sambut seluruh siswa, orang tua, serta mitra pendidikan di SMK Negeri 1 Manokwari, sekolah yang berkomitmen mencetak generasi unggul di bidang manajemen, bisnis, dan teknologi.
Mengusung tagline "Smart, Professional, Entrepreneurial", kami terus menghadirkan pendidikan yang relevan dengan kebutuhan dunia kerja dan industri masa kini. Kami percaya bahwa sinergi antara pendidikan dan dunia industri adalah kunci untuk menciptakan lulusan yang siap bersaing secara global, baik dari segi keterampilan teknis, jiwa kepemimpinan, maupun soft skill yang mumpuni.
SMK Negeri 1 Manokwari memiliki visi menjadi SMK unggulan di bidang manajemen dan bisnis yang berbasis digital dan berkarakter, dengan semangat profesionalisme, inovasi, dan kemitraan. Untuk mewujudkannya, kami terus berupaya membekali peserta didik dengan kompetensi sesuai program keahlian, membentuk karakter wirausaha, serta menjalin kolaborasi strategis dengan dunia usaha dan dunia industri.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'writer',
                'value' => 'Naftali Rumbino',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'jabatan',
                'value' => 'Kepala SMKN 1 Manokwari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'picture_1',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'picture_2',
                'value' => 'images/bg-section1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
