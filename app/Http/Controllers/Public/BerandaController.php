<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SchIdentity;
use App\Models\Galeri;
use App\Models\Informasi;
use App\Models\Jurusan;
use App\Models\HomeSection7;
use App\Models\HomeSection6;
use App\Models\HomeSection5;
use App\Models\HomeSection4;
use App\Models\HomeSection3;
use App\Models\HomeSection2;
use App\Models\HomeSection1;

class BerandaController extends Controller
{
    public function index()
    {
        $galeri = Galeri::orderBy('created_at', 'desc')->take(6)->get();
        $jurusan = Jurusan::orderBy('created_at', 'desc')->take(4)->get();
        $informasi = Informasi::orderBy('created_at', 'desc')->take(4)->get();
        $identities = SchIdentity::pluck('value', 'key');
        $section7 = HomeSection7::pluck('value', 'key');
        $section6 = HomeSection6::pluck('value', 'key');
        $section5 = HomeSection5::pluck('value', 'key');
        $section4 = HomeSection4::pluck('value', 'key');
        $section3 = HomeSection3::pluck('value', 'key');
        $section2 = HomeSection2::pluck('value', 'key');
        $section1 = HomeSection1::pluck('value', 'key');

        return view('wp-public.pages.home', compact('identities', 'galeri', 'informasi', 'jurusan', 'section7', 'section6', 'section5', 'section4', 'section3', 'section2', 'section1'));
    }
}
