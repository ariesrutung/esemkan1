<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Submission;
use App\Models\SpmbSettings;

class SubmissionController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel spmb_settings dalam bentuk key-value
        $spmb = SpmbSettings::pluck('value', 'key')->toArray();

        // Buat array syarat dan filter yang tidak perlu ditampilkan
        $syarat = [];

        for ($i = 1; $i <= 7; $i++) {
            $judul = trim($spmb["syarat_$i"] ?? '');
            $deskripsi = trim($spmb["syarat_{$i}_desk"] ?? '');

            // Jika judul atau deskripsi adalah '-' atau kosong, lewati
            if ($judul === '-' || $deskripsi === '-' || ($judul === '' && $deskripsi === '')) {
                continue;
            }

            $syarat[] = [
                'judul' => $judul,
                'deskripsi' => $deskripsi,
            ];
        }

        // Ambil data lain (opsional)
        $subm_req = Submission::all()->map(function ($item) {
            $value = json_decode($item->value);
            return [
                'key' => $item->key,
                'name' => $value->name ?? '',
                'description' => $value->description ?? '',
            ];
        });

        return view('wp-public.pages.spmb', compact('subm_req', 'spmb', 'syarat'));
    }
}
