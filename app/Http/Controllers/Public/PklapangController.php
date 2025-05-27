<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\PageSettings;
use App\Models\Pkl;

class PklapangController extends Controller
{
    public function index()
    {
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();
        $pklList = Pkl::latest()->get();

        return view('wp-public.pages.ppl', compact('pages_settings', 'pklList'));
    }
}
