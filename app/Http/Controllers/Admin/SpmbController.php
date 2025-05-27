<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageSettings;
use App\Models\Spmb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpmbController extends Controller
{
    public function index()
    {
        $section1 = Spmb::pluck('value', 'key')->toArray();
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
            Spmb::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Simpan gambar jika diunggah
        if ($request->hasFile('gbr_brosur')) {
            $file = $request->file('gbr_brosur');
            $filename = 'brosur_' . time() . '.' . $file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('spmb/brosur', $file, $filename);

            Spmb::updateOrCreate(['key' => 'gbr_brosur'], ['value' => $filename]);
        }

        return back()->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
