<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        $jurusan = [
            'Computer Science',
            'Mathematics',
            'Physics',
            'Biology',
            'Chemistry',
        ];

        foreach ($jurusan as $nama) {
            Jurusan::create(['nama' => $nama]);
        }
    }
}
