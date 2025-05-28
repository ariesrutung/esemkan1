<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pkl;
use Illuminate\Http\Request;

class PklController extends Controller
{
    public function index()
    {
        $pkl = Pkl::all();
        $pageTitle = 'Praktik Kerja Lapangan';
        return view('wp-admin.pages.pkl', compact('pkl', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'link' => 'required|file|mimes:pdf|max:5120',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $gambarName = null;
        $pdfName = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('themes/frontend/assets/img/pkl'), $gambarName);
        }

        if ($request->hasFile('link')) {
            $pdf = $request->file('link');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/pdf'), $pdfName);
        }

        Pkl::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $pdfName,
            'gambar' => $gambarName,
        ]);

        return redirect()->route('admin.pk_lapangan.index')->with('success', 'Data PKL berhasil ditambahkan.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'link' => 'nullable|file|mimes:pdf|max:5120',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $pkl = Pkl::findOrFail($id);

        // Update teks
        $pkl->judul = $request->judul;
        $pkl->deskripsi = $request->deskripsi;

        // Handle file PDF baru
        if ($request->hasFile('link')) {
            // Hapus PDF lama jika ada
            if ($pkl->link && file_exists(public_path('uploads/pdf/' . $pkl->link))) {
                unlink(public_path('uploads/pdf/' . $pkl->link));
            }

            $pdf = $request->file('link');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/pdf'), $pdfName);
            $pkl->link = $pdfName;
        }

        // Handle gambar baru
        if ($request->hasFile('gambar')) {
            if ($pkl->gambar && file_exists(public_path('themes/frontend/assets/img/pkl/' . $pkl->gambar))) {
                unlink(public_path('themes/frontend/assets/img/pkl/' . $pkl->gambar));
            }

            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('themes/frontend/assets/img/pkl'), $gambarName);
            $pkl->gambar = $gambarName;
        }

        $pkl->save();

        return redirect()->route('admin.pk_lapangan.index')->with('success', 'Data PKL berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pkl = Pkl::findOrFail($id);

        // Hapus gambar jika ada
        if ($pkl->gambar && file_exists(public_path('themes/frontend/assets/img/pkl/' . $pkl->gambar))) {
            unlink(public_path('themes/frontend/assets/img/pkl/' . $pkl->gambar));
        }

        // Hapus file PDF jika ada
        if ($pkl->link && file_exists(public_path('uploads/pdf/' . $pkl->link))) {
            unlink(public_path('uploads/pdf/' . $pkl->link));
        }

        $pkl->delete();

        return redirect()->route('admin.pk_lapangan.index')->with('success', 'Data PKL berhasil dihapus.');
    }
}
