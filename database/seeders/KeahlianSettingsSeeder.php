<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeahlianSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keahlian_settings')->insert([
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
