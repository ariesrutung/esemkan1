<?php

namespace App\Http\Controllers\Public;

use App\Models\Jurusan;
use App\Models\PageSettings;
use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Gtk;

class JurusanController extends Controller
{
    public function index()
    {
        $prt_jurusan = Jurusan::all();
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();

        return view('wp-public.pages.program-keahlian', compact('prt_jurusan', 'pages_settings'));
    }

    // public function detail_jurusan($slug)
    // {
    //     $jurusan = Jurusan::where('slug', $slug)->firstOrFail();
    //     $pages_settings = PageSettings::pluck('value', 'key')->toArray();

    //     $related_jurusan = Jurusan::where('id', '!=', $jurusan->id)->limit(5)->get();

    //     return view('wp-public.pages.detail-program-keahlian', compact('jurusan', 'pages_settings', 'related_jurusan'));
    // }


    public function detail_jurusan($slug)
    {
        $jurusan = Jurusan::with('ketuaJurusan')->where('slug', $slug)->firstOrFail();
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();
        $related_jurusan = Jurusan::where('id', '!=', $jurusan->id)->limit(5)->get();
        $courses = Courses::where('jurusan_id', $jurusan->id)->get();

        return view('wp-public.pages.detail-program-keahlian', compact(
            'jurusan',
            'pages_settings',
            'related_jurusan',
            'courses'
        ));
    }
}
