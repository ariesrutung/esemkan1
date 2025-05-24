<?php

namespace Database\Seeders;

use App\Models\Informasi;
use App\Models\Pengumuman;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    // php artisan db:seed --class=SubmissionReqSeeder
    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            GtkSeeder::class,
            FasilitasSeeder::class,
            InformasiSeeder::class,
            GaleriSeeder::class,
        ]);
    }
}
