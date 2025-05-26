<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    public function index()
    {
        $keahlian = Jurusan::all();
        $pageTitle = 'Program Keahlian';
        return view('wp-admin.pages.keahlian', compact('keahlian', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $gambarName = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('themes/frontend/assets/img/program-studi'), $gambarName);
        }

        Jurusan::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarName,
        ]);

        return redirect()->route('admin.prog_keahlian.index')->with('success', 'Data keahlian berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kode' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $keahlian = Jurusan::findOrFail($id);
        $keahlian->nama = $request->nama;
        $keahlian->kode = $request->kode;
        $keahlian->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($keahlian->gambar && file_exists(public_path('themes/frontend/assets/img/program-studi/' . $keahlian->gambar))) {
                unlink(public_path('themes/frontend/assets/img/program-studi/' . $keahlian->gambar));
            }

            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('themes/frontend/assets/img/program-studi'), $namaGambar);
            $keahlian->gambar = $namaGambar;
        }

        $keahlian->save();

        return redirect()->route('admin.prog_keahlian.index')->with('success', 'Data keahlian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $keahlian = Jurusan::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($keahlian->gambar && file_exists(public_path('themes/frontend/assets/img/program-studi/' . $keahlian->gambar))) {
            unlink(public_path('themes/frontend/assets/img/program-studi/' . $keahlian->gambar));
        }

        $keahlian->delete();

        return redirect()->route('admin.prog_keahlian.index')->with('success', 'Data keahlian berhasil dihapus.');
    }
}
