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

            HomeSection1Seeder::class,
            HomeSection2Seeder::class,
            HomeSection3Seeder::class,
            HomeSection4Seeder::class,
            HomeSection5Seeder::class,
            HomeSection6Seeder::class,
            HomeSection7Seeder::class,

            ProfilSettingsSeeder::class,
            KeahlianSettingsSeeder::class,
            PklSettingsSeeder::class,
            SpmbSettingsSeeder::class,
            SiswaSeeder::class,
        ]);
    }
}
