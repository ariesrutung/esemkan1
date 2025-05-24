<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $identities = Galeri::pluck('value', 'key');

        return view('wp-public.pages.profil', compact('identities'));
    }
}
