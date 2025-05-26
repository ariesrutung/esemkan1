<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchIdentity;
use Illuminate\Http\Request;

class PageSettingsController extends Controller
{
    public function index()
    {
        $pageTitle = 'Identitas Sekolah';

        return view('wp-admin.pages.pengaturan', compact('pageTitle'));
        // $identity = SchIdentity::pluck('value', 'key');
        // $pageTitle = 'Identitas Sekolah';

        // return view('wp-admin.pages.identity', compact('identity', 'pageTitle'));
    }
}
