<?php

namespace App\Http\Controllers\Public;

use App\Models\SchIdentity;
use App\Models\PageSettings;
use App\Models\ProfilSettings;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        $sch_identity = SchIdentity::pluck('value', 'key');
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();

        return view('wp-public.pages.profil', compact('sch_identity', 'pages_settings'));
    }
}
