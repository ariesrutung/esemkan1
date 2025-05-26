<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSection5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_section5')->insert([
            [
                'key' => 'title',
                'value' => 'Data Warga Sekolah',
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
                'key' => 'murid',
                'value' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'guru',
                'value' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'tendik',
                'value' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'key' => 'rombel',
                'value' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
