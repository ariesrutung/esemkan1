<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            $namaFile = time() . '.' . $foto->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/fasilitas';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $foto->move($uploadPath, $namaFile);
            $fotoName = 'fasilitas/' . $namaFile;
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
            // Hapus foto lama jika ada
            if ($fasilitas->foto) {
                $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $fasilitas->foto;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $foto = $request->file('foto');
            $namaFile = time() . '.' . $foto->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/fasilitas';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $foto->move($uploadPath, $namaFile);
            $fasilitas->foto = 'fasilitas/' . $namaFile;
        }

        $fasilitas->save();

        return redirect()->route('admin.fasilitas_sekolah.index')->with('success', 'Data fasilitas berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        if ($fasilitas->foto) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $fasilitas->foto;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $fasilitas->delete();

        return redirect()->route('admin.fasilitas_sekolah.index')->with('success', 'Data fasilitas berhasil dihapus.');
    }
}
