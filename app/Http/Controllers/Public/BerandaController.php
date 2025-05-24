<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SchIdentity;
use App\Models\Galeri;
use App\Models\Informasi;
use App\Models\Jurusan;

class BerandaController extends Controller
{
    public function index()
    {
        $galeri = Galeri::orderBy('created_at', 'desc')->take(6)->get();
        $jurusan = Jurusan::orderBy('created_at', 'desc')->take(4)->get();
        $informasi = Informasi::orderBy('created_at', 'desc')->take(4)->get();
        $identities = SchIdentity::pluck('value', 'key');

        return view('wp-public.pages.home', compact('identities', 'galeri', 'informasi', 'jurusan'));
    }
}
