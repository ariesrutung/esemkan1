<?php

namespace App\Http\Controllers\Admin;

use App\Models\Informasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        $pageTitle = 'Informasi';
        return view('wp-admin.pages.informasi', compact('informasi', 'pageTitle'));
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
            $gambar->move(public_path('themes/frontend/assets/img/education'), $gambarName);
        }

        $slug = Str::slug($request->judul);

        Informasi::create([
            'judul' => $request->judul,
            'slug' => $slug,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'tempat' => $request->tempat,
        ]);

        return redirect()->route('admin.pen_informasi.index')->with('success', 'Data informasi berhasil ditambahkan.');
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

        $slug = Str::slug($request->judul);
        $informasi = Informasi::findOrFail($id);
        $informasi->judul = $request->judul;
        $informasi->slug = $slug;
        $informasi->deskripsi = $request->deskripsi;
        $informasi->tanggal = $request->tanggal;
        $informasi->jam = $request->jam;
        $informasi->tempat = $request->tempat;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($informasi->gambar && file_exists(public_path('themes/frontend/assets/img/informasi/' . $informasi->gambar))) {
                unlink(public_path('themes/frontend/assets/img/informasi/' . $informasi->gambar));
            }

            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('themes/frontend/assets/img/informasi'), $namaGambar);
            $informasi->gambar = $namaGambar;
        }

        $informasi->save();

        return redirect()->route('admin.pen_informasi.index')->with('success', 'Data informasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($informasi->gambar && file_exists(public_path('themes/frontend/assets/img/informasi/' . $informasi->gambar))) {
            unlink(public_path('themes/frontend/assets/img/informasi/' . $informasi->gambar));
        }

        $informasi->delete();

        return redirect()->route('admin.pen_informasi.index')->with('success', 'Data informasi berhasil dihapus.');
    }
}
