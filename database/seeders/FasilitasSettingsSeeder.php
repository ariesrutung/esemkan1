<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FasilitasSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fasilitas_settings')->insert([
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
