<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SchIdentity;

class ProfilController extends Controller
{
    public function index()
    {
        $identities = SchIdentity::pluck('value', 'key');

        return view('wp-public.pages.profil', compact('identities'));
    }
}
