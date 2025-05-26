<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

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
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'tempat' => 'required|string|max:255',
        ]);

        $gambarName = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('themes/frontend/assets/img/galeri'), $gambarName);
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
            'jam' => 'required',
            'tempat' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif|max:2048',
        ]);

        $galeri = Galeri::findOrFail($id);
        $galeri->judul = $request->judul;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->tanggal = $request->tanggal;
        $galeri->jam = $request->jam;
        $galeri->tempat = $request->tempat;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($galeri->gambar && file_exists(public_path('themes/frontend/assets/img/galeri/' . $galeri->gambar))) {
                unlink(public_path('themes/frontend/assets/img/galeri/' . $galeri->gambar));
            }

            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('themes/frontend/assets/img/galeri'), $namaGambar);
            $galeri->gambar = $namaGambar;
        }

        $galeri->save();

        return redirect()->route('admin.galeri_sekolah.index')->with('success', 'Data galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($galeri->gambar && file_exists(public_path('themes/frontend/assets/img/galeri/' . $galeri->gambar))) {
            unlink(public_path('themes/frontend/assets/img/galeri/' . $galeri->gambar));
        }

        $galeri->delete();

        return redirect()->route('admin.galeri_sekolah.index')->with('success', 'Data galeri berhasil dihapus.');
    }
}
