<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSection1;
use App\Models\HomeSection2;
use App\Models\HomeSection3;
use App\Models\HomeSection4;
use App\Models\HomeSection5;
use App\Models\HomeSection6;
use App\Models\HomeSection7;
use App\Models\ProfilSettings;
use App\Models\GtkSettings;
use App\Models\FasilitasSettings;
use App\Models\KeahlianSettings;
use App\Models\InformasiSettings;
use App\Models\PklSettings;
use App\Models\SpmbSettings;
use Illuminate\Support\Facades\Storage;

class HomeSettingController extends Controller
{
    public function index()
    {
        $section1 = HomeSection1::pluck('value', 'key')->toArray();
        $section2 = HomeSection2::pluck('value', 'key')->toArray();
        $section3 = HomeSection3::pluck('value', 'key')->toArray();
        $section4 = HomeSection4::pluck('value', 'key')->toArray();
        $section5 = HomeSection5::pluck('value', 'key')->toArray();
        $section6 = HomeSection6::pluck('value', 'key')->toArray();
        $section7 = HomeSection7::pluck('value', 'key')->toArray();

        $pageTitle = 'Pengaturan Halaman';
        return view('wp-admin.pages.settings.home', compact('pageTitle', 'section1', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7'));
    }

    public function updateSection1(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            HomeSection1::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Section 1 berhasil diperbarui.');
    }


    public function updateSection2(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            HomeSection2::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Section 2 berhasil diperbarui.');
    }


    public function updateSection3(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            HomeSection3::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Section 3 berhasil diperbarui.');
    }


    public function updateSection4(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            HomeSection4::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Section 4 berhasil diperbarui.');
    }


    public function updateSection5(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            HomeSection5::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Section 5 berhasil diperbarui.');
    }


    public function updateSection6(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            HomeSection6::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Section 6 berhasil diperbarui.');
    }

    public function updateSection7(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            HomeSection7::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->back()->with('success', 'Section 7 berhasil diperbarui.');
    }

    // PROFIL SETTING
    public function profil_settings()
    {
        $section1 = ProfilSettings::pluck('value', 'key')->toArray();
        $pageTitle = 'Pengaturan Halaman Profil Sekolah';
        return view('wp-admin.pages.settings.profil', compact('section1', 'pageTitle'));
    }

    // GTK 
    public function gtk_settings()
    {
        $section1 = GtkSettings::pluck('value', 'key')->toArray();
        $pageTitle = 'Pengaturan Halaman GTK';
        return view('wp-admin.pages.settings.gtk', compact('section1', 'pageTitle'));
    }

    public function fasilitas_settings()
    {
        $section1 = FasilitasSettings::pluck('value', 'key')->toArray();
        $pageTitle = 'Pengaturan Halaman Fasilitas Sekolah';
        return view('wp-admin.pages.settings.fasilitas', compact('section1', 'pageTitle'));
    }

    public function keahlian_settings()
    {
        $section1 = KeahlianSettings::pluck('value', 'key')->toArray();
        $pageTitle = 'Pengaturan Halaman Program Keahlian';
        return view('wp-admin.pages.settings.keahlian', compact('section1', 'pageTitle'));
    }


    public function pkl_settings()
    {
        $section1 = PklSettings::pluck('value', 'key')->toArray();
        $pageTitle = 'Pengaturan Halaman PKL';
        return view('wp-admin.pages.settings.pkl', compact('section1', 'pageTitle'));
    }
    public function informasi_settings()
    {
        $section1 = InformasiSettings::pluck('value', 'key')->toArray();
        $pageTitle = 'Pengaturan Halaman Informasi';
        return view('wp-admin.pages.settings.informasi', compact('section1', 'pageTitle'));
    }

    public function spmb_settings()
    {
        $section1 = SpmbSettings::pluck('value', 'key')->toArray();
        $pageTitle = 'SPMB';
        return view('wp-admin.pages.spmb', compact('section1', 'pageTitle'));
    }


    public function updateSpmbSettings(Request $request)
    {
        // Validasi input gambar
        $request->validate([
            'gbr_brosur' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Simpan semua input teks
        foreach ($request->except(['_token', 'gbr_brosur']) as $key => $value) {
            SpmbSettings::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Simpan gambar jika diunggah
        if ($request->hasFile('gbr_brosur')) {
            $file = $request->file('gbr_brosur');
            $filename = 'brosur_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('spmb/brosur', $file, $filename);

            SpmbSettings::updateOrCreate(['key' => 'gbr_brosur'], ['value' => $filename]);
        }

        return back()->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
