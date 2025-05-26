<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PklSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pkl_settings')->insert([
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
        ]);
    }
}
