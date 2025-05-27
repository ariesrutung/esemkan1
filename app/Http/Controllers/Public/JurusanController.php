<?php

namespace App\Http\Controllers\Public;

use App\Models\Jurusan;
use App\Models\PageSettings;
use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    public function index()
    {
        $prt_jurusan = Jurusan::all();
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();

        return view('wp-public.pages.program-keahlian', compact('prt_jurusan', 'pages_settings'));
    }
}
