<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');

        $kelasList = ['X A', 'X B', 'X C', 'XI A', 'XI B', 'XI C', 'XII A', 'XII B', 'XII C'];

        for ($i = 0; $i < 20; $i++) {
            DB::table('siswa')->insert([
                'nama_lengkap'   => $faker->name,
                'nisn'           => $faker->unique()->numerify('##########'), // 10 digit NISN
                'kelas'          => $faker->randomElement($kelasList),
                'jenis_kelamin'  => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'tempat_lahir'   => $faker->city,
                'tanggal_lahir'  => $faker->date('Y-m-d', '2012-01-01'),
                'alamat'         => $faker->address,
                'no_hp'          => $faker->phoneNumber,
                'foto'           => 'default.jpg',
                'created_at'     => now(),
                'updated_at'     => now(),
            ]);
        }
    }
}
