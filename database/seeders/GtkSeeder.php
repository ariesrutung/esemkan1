<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gtk;
use Faker\Factory as Faker;

class GtkSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 15; $i++) {
            Gtk::create([
                'nama_lengkap' => $faker->name,
                'jabatan' => $faker->randomElement([
                    'Guru Matematika',
                    'Guru Bahasa Indonesia',
                    'Guru IPA',
                    'Guru IPS',
                    'Guru Agama',
                    'Tata Usaha',
                    'Kepala Sekolah',
                    'Wakil Kepala Sekolah',
                    'Guru BK'
                ]),
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'nip' => $faker->unique()->numerify('1980###########'),
                'nuptk' => $faker->unique()->numerify('1234########'),
                'no_hp' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'foto' => 'person-f-8.webp',
            ]);
        }
    }
}
