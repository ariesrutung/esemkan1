<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index()
    {
        $prt_jurusan = Jurusan::all();
        return view('wp-public.pages.program-keahlian', compact('prt_jurusan'));
    }
}
