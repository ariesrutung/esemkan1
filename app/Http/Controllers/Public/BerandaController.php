<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\SchIdentity;

class BerandaController extends Controller
{
    public function index()
    {
        $identities = SchIdentity::pluck('value', 'key');

        return view('wp-public.pages.home', compact('identities'));
    }
}
