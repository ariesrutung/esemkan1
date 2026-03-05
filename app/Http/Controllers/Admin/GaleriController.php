<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        $pageTitle = 'Galeri Kegiatan';
        return view('wp-admin.pages.galeri', compact('galeri', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:1024',
            'kategori' => 'nullable|string|in:berita,event,pengumuman',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'tempat' => 'required|string|max:255',
        ]);

        $gambarName = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/galeri';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $gambarName = 'galeri/' . $namaFile;
        }

        Galeri::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'tempat' => $request->tempat,
        ]);

        return redirect()->route('admin.galeri_sekolah.index')->with('success', 'Data galeri berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'tempat' => 'required|string|max:255',
            'kategori' => 'nullable|string|in:berita,event,pengumuman',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:1024',
        ]);

        $galeri = Galeri::findOrFail($id);
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->tanggal = $request->tanggal;
        $galeri->jam = $request->jam;
        $galeri->tempat = $request->tempat;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada dan bukan file default
            if ($galeri->gambar && !str_starts_with(basename($galeri->gambar), 'default')) {
                $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $galeri->gambar;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/galeri';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $galeri->gambar = 'galeri/' . $namaFile;
        }

        $galeri->save();

        return redirect()->route('admin.galeri_sekolah.index')->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus gambar jika ada dan bukan file default
        if ($galeri->gambar && !str_starts_with(basename($galeri->gambar), 'default')) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $galeri->gambar;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $galeri->delete();

        return redirect()->route('admin.galeri_sekolah.index')->with('success', 'Data galeri berhasil dihapus.');
    }
}
