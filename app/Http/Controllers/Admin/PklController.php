<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pkl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:1024',
        ]);

        $gambarName = null;
        $pdfName = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/pkl';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $gambarName = 'pkl/' . $namaFile;
        }

        if ($request->hasFile('link')) {
            $pdf = $request->file('link');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();

            $pdfPath = public_path('uploads/pdf');
            if (!File::exists($pdfPath)) {
                File::makeDirectory($pdfPath, 0755, true);
            }

            $pdf->move($pdfPath, $pdfName);
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
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:1024',
        ]);

        $pkl = Pkl::findOrFail($id);

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
            // Hapus gambar lama jika ada dan bukan file default
            if ($pkl->gambar && !str_starts_with(basename($pkl->gambar), 'default')) {
                $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $pkl->gambar;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/pkl';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $pkl->gambar = 'pkl/' . $namaFile;
        }

        $pkl->save();

        return redirect()->route('admin.pk_lapangan.index')->with('success', 'Data PKL berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pkl = Pkl::findOrFail($id);

        // Hapus gambar jika ada dan bukan file default
        if ($pkl->gambar && !str_starts_with(basename($pkl->gambar), 'default')) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $pkl->gambar;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        // Hapus file PDF jika ada
        if ($pkl->link && file_exists(public_path('uploads/pdf/' . $pkl->link))) {
            unlink(public_path('uploads/pdf/' . $pkl->link));
        }

        $pkl->delete();

        return redirect()->route('admin.pk_lapangan.index')->with('success', 'Data PKL berhasil dihapus.');
    }
}
