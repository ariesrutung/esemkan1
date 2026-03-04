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
        $settings = PageSettings::all();

        $groupMapping = [
            'home_section2_' => 'Sambutan',
            'home_' => 'Home',
            'profil_' => 'Profil',
            'fasilitas_' => 'Fasilitas',
            'program_keahlian_' => 'Program Keahlian',
            'pkl_' => 'PKL',
            'informasi_' => 'Informasi',
            'spmb_' => 'SPMB',
        ];

        $groups = [];
        $assignedIds = [];

        foreach ($groupMapping as $prefix => $label) {
            $groupSettings = $settings->filter(fn($s) => str_starts_with($s->key, $prefix));
            if ($groupSettings->isNotEmpty()) {
                $groups[$label] = [
                    'prefix' => $prefix,
                    'settings' => $groupSettings
                ];
                $assignedIds = array_merge($assignedIds, $groupSettings->pluck('id')->toArray());
            }
        }

        $others = $settings->reject(fn($s) => in_array($s->id, $assignedIds));
        if ($others->isNotEmpty()) {
            $groups['Lainnya'] = [
                'prefix' => '',
                'settings' => $others
            ];
        }

        return view('wp-admin.pages.pengaturan', compact('pageTitle', 'groups'));
    }

    public function updateSection(Request $request)
    {
        // Validasi data jika diperlukan
        $validated = $request->except('_token');

        foreach ($validated as $key => $value) {
            PageSettings::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Pengaturan halaman berhasil diperbarui.');
    }
}
