<?php

namespace App\Http\Controllers\Public;

use App\Models\PageSettings;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class FasilitasController extends Controller
{
    public function index()
    {
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();
        $prt_fasilitas = Fasilitas::all();


        return view('wp-public.pages.fasilitas', compact('prt_fasilitas', 'pages_settings'));
    }
}
