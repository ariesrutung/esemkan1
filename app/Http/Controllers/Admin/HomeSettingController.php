<?php

// app/Http/Controllers/Admin/HomeSettingController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSetting;
use Illuminate\Http\Request;

class HomeSettingController extends Controller
{
    public function index()
    {
        $settings = HomeSetting::pluck('value', 'key')->toArray();
        return view('wp-admin.pages.beranda', compact('settings'));
    }

    public function updateBeranda(Request $request)
    {
        $fields = $request->only(['greeting', 'school_name', 'button']);

        foreach ($fields as $key => $value) {
            HomeSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $filename = 'picture_' . time() . '.' . $file->getClientOriginalExtension();
            $path = 'themes/frontend/assets/img/beranda';
            $file->move(public_path($path), $filename);
            HomeSetting::updateOrCreate(['key' => 'picture'], ['value' => "$path/$filename"]);
        }

        return back()->with('success', 'Beranda berhasil diperbarui.');
    }

    public function updateQuote(Request $request)
    {
        $fields = $request->only(['quote', 'quote_by', 'quote_title']);

        foreach ($fields as $key => $value) {
            HomeSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        if ($request->hasFile('quote_picture')) {
            $file = $request->file('quote_picture');
            $filename = 'quote_picture_' . time() . '.' . $file->getClientOriginalExtension();
            $path = 'themes/frontend/assets/img/beranda';
            $file->move(public_path($path), $filename);
            HomeSetting::updateOrCreate(['key' => 'quote_picture'], ['value' => "$path/$filename"]);
        }

        return back()->with('success', 'Quote berhasil diperbarui.');
    }

    public function updateBenefit(Request $request)
    {
        // Ambil semua input yang diperlukan
        $fields = $request->only([
            'ben_title',
            'ben_description',
            'ben_icon',
            'ben_bgcolor'
        ]);

        // Simpan ke tabel HomeSetting dalam format key-value
        foreach ($fields as $key => $value) {
            HomeSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return back()->with('success', 'Data keunggulan berhasil diperbarui.');
    }


    public function updatePrograkeahlian(Request $request)
    {
        $fields = $request->only([
            'program_section_title',
            'program_section_subtitle',
            'program_1_title',
            'program_1_description',
        ]);

        foreach ($fields as $key => $value) {
            HomeSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        if ($request->hasFile('program_1_image')) {
            $file = $request->file('program_1_image');
            $filename = 'program_1_image_' . time() . '.' . $file->getClientOriginalExtension();
            $path = 'themes/frontend/assets/img/beranda';
            $file->move(public_path($path), $filename);

            HomeSetting::updateOrCreate(['key' => 'program_1_image'], ['value' => "$path/$filename"]);
        }

        return back()->with('success', 'Data berhasil diperbarui.');
    }
}
