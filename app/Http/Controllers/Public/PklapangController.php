<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\PklSettings;
use App\Models\Pkl; // tambahkan ini di bagian atas

class PklapangController extends Controller
{
    public function index()
    {
        $identities = PklSettings::pluck('value', 'key');
        $pklList = Pkl::latest()->get(); // ambil semua data PKL dari tabel

        return view('wp-public.pages.ppl', compact('identities', 'pklList'));
    }
}
