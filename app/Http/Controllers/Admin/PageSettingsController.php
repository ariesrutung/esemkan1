<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSettings;
use Illuminate\Http\Request;

class PageSettingsController extends Controller
{
    public function index()
    {
        $pageTitle = 'Pengaturan Halaman Web';
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();

        return view('wp-admin.pages.pengaturan', compact('pageTitle', 'pages_settings'));
    }

    public function updateSection(Request $request)
    {
        // Validasi data jika diperlukan
        $validated = $request->except('_token');

        foreach ($validated as $key => $value) {
            PageSettings::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Identitas sekolah berhasil diperbarui.');
    }
}
