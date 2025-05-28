<?php

namespace App\Http\Controllers\Public;

use App\Models\Spmb;
use App\Http\Controllers\Controller;

class SubmissionController extends Controller
{
    public function index()
    {
        $pages_settings = Spmb::pluck('value', 'key')->toArray();

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

        return view('wp-public.pages.spmb', compact('syarat', 'pages_settings'));
    }
}
