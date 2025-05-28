<?php

namespace Database\Seeders;

use App\Models\Informasi;
use App\Models\Pengumuman;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    // php artisan db:seed --class=ProfilSettingsSeederSeeder
    // php artisan make:seeder HomeSection6Seeder
    // php artisan make:migration create_profil_settings_table

    public function run(): void
    {
        $this->call([
            JurusanSeeder::class,
            GtkSeeder::class,
            FasilitasSeeder::class,
            InformasiSeeder::class,
            GaleriSeeder::class,

            SiswaSeeder::class,
            MapelSeeder::class,
        ]);
    }
}
