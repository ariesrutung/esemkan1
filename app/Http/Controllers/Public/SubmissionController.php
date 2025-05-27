<?php

namespace App\Http\Controllers\Public;

use App\Models\Spmb;
use App\Models\Submission;
use App\Models\PageSettings;
use App\Http\Controllers\Controller;

class SubmissionController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel spmb_settings dalam bentuk key-value
        $spmb = Spmb::pluck('value', 'key')->toArray();
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();

        // Buat array syarat dan filter yang tidak perlu ditampilkan
        $syarat = [];

        for ($i = 1; $i <= 10; $i++) {
            $judulKey = "spmb_syarat_$i";
            $deskripsiKey = "spmb_syarat_{$i}_desk";

            $judul = trim($pages_settings[$judulKey] ?? '');
            $deskripsi = trim($pages_settings[$deskripsiKey] ?? '');

            // Lewati jika kosong atau hanya berisi '-'
            if ($judul === '-' || $deskripsi === '-' || ($judul === '' && $deskripsi === '')) {
                continue;
            }

            $syarat[] = [
                'judul' => $judul,
                'deskripsi' => $deskripsi,
            ];
        }

        // Ambil data lain (opsional)
        // $subm_req = Submission::all()->map(function ($item) {
        //     $value = json_decode($item->value);
        //     return [
        //         'key' => $item->key,
        //         'name' => $value->name ?? '',
        //         'description' => $value->description ?? '',
        //     ];
        // });

        return view('wp-public.pages.spmb', compact('spmb', 'syarat', 'pages_settings'));
    }
}
