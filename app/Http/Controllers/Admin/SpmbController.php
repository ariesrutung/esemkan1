<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Spmb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpmbController extends Controller
{
    public function index()
    {
        $spmb_settings = Spmb::pluck('value', 'key')->toArray();
        $pageTitle = 'SPMB';

        return view('wp-admin.pages.spmb', compact('spmb_settings', 'pageTitle'));
    }

    public function updateSpmbSettings(Request $request)
    {
        // Validasi input gambar
        $request->validate([
            'gbr_brosur' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Simpan semua input teks kecuali file
        foreach ($request->except(['_token', 'gbr_brosur']) as $key => $value) {
            Spmb::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        // Jika user upload gambar baru
        if ($request->hasFile('gbr_brosur')) {
            // Ambil data gambar lama
            $oldImage = Spmb::where('key', 'gbr_brosur')->value('value');
            $destinationPath = public_path('themes/frontend/assets/img/spmb');

            // Hapus gambar lama jika ada dan file-nya masih ada di folder
            if ($oldImage && file_exists($destinationPath . '/' . $oldImage)) {
                unlink($destinationPath . '/' . $oldImage);
            }

            // Simpan gambar baru
            $file = $request->file('gbr_brosur');
            $filename = 'brosur_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $filename);

            // Simpan nama file ke DB
            Spmb::updateOrCreate(['key' => 'spmb_gbr_brosur'], ['value' => $filename]);
        }

        return back()->with('success', 'Data halaman SPMB berhasil diperbarui.');
    }
}
