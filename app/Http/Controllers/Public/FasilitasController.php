<?php

namespace App\Http\Controllers\Public;

use App\Models\Galeri;
use App\Models\Fasilitas;
use Illuminate\Support\Arr;
use App\Models\PageSettings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FasilitasController extends Controller
{
    public function index()
    {
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();
        $prt_fasilitas = Fasilitas::all();


        return view('wp-public.pages.fasilitas', compact('prt_fasilitas', 'pages_settings'));
    }

    public function all_galeries()
    {
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();
        $prt_fasilitas = Fasilitas::all();
        $galeri = Galeri::latest()->paginate(9);


        return view('wp-public.pages.galeri', compact('prt_fasilitas', 'pages_settings', 'galeri'));
    }
}
