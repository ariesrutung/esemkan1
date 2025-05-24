<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubmissionReqSeeder extends Seeder
{
    public function run(): void
    {
        $documents = [
            [
                'name' => 'Surat Keterangan Lulus/SKHU/Ijazah',
                'description' => 'Psrsayaratan Pendaftaran',
            ],
            [
                'name' => 'Foto Copy KTP Orang Tua',
                'description' => 'Dokumen Resmi.',
            ],
            [
                'name' => 'Foto Copy Kartu Keluarga',
                'description' => 'Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus.',
            ],
            [
                'name' => '2 Lembar Pas Foto 4x6 Berwarna',
                'description' => 'Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat.',
            ],
            [
                'name' => 'Foto Copy Akta Kelahiran',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet elit.',
            ],
        ];

        foreach ($documents as $doc) {
            DB::table('submission_req')->insert([
                'key' => Str::slug($doc['name'], '_'),
                'value' => json_encode([
                    'name' => $doc['name'],
                    'description' => $doc['description'],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
