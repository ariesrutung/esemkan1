<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        $pageTitle = 'Fasilitas Sekolah';
        return view('wp-admin.pages.fasilitas', compact('fasilitas', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $fotoName = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('themes/frontend/assets/img/fasilitas'), $fotoName);
        }

        Fasilitas::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'jumlah' => $request->jumlah,
            'foto' => $fotoName,
        ]);

        return redirect()->route('admin.fasilitas_sekolah.index')->with('success', 'Data fasilitas berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'jumlah' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->nama = $request->nama;
        $fasilitas->deskripsi = $request->deskripsi;
        $fasilitas->jumlah = $request->jumlah;

        if ($request->hasFile('foto')) {
            // Hapus foto lama
            if ($fasilitas->foto && file_exists(public_path('themes/frontend/assets/img/fasilitas/' . $fasilitas->foto))) {
                unlink(public_path('themes/frontend/assets/img/fasilitas/' . $fasilitas->foto));
            }

            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('themes/frontend/assets/img/fasilitas'), $namaFoto);
            $fasilitas->foto = $namaFoto;
        }

        $fasilitas->save();

        return redirect()->route('admin.fasilitas_sekolah.index')->with('success', 'Data fasilitas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($fasilitas->gambar && file_exists(public_path('themes/frontend/assets/img/education/' . $fasilitas->gambar))) {
            unlink(public_path('themes/frontend/assets/img/education/' . $fasilitas->gambar));
        }

        $fasilitas->delete();

        return redirect()->route('admin.fasilitas_sekolah.index')->with('success', 'Data fasilitas berhasil dihapus.');
    }
}
