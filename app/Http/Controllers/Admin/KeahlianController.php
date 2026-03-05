<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            
            // Tentukan path tujuan di public_html/public/themes/program-studi
            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/program-studi';
            
            // Buat folder jika belum ada
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }
            
            // Pindahkan file ke folder tujuan
            $gambar->move($uploadPath, $gambarName);
            
            // Simpan path relatif ke database
            $gambarName = 'program-studi/' . $gambarName;
        }

        $slug = Str::slug($request->nama);

        Jurusan::create([
            'nama' => $request->nama,
            'slug' => $slug,
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
        
        $slug = Str::slug($request->nama);
        $keahlian->nama = $request->nama;
        $keahlian->slug = $slug;
        $keahlian->kode = $request->kode;
        $keahlian->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($keahlian->gambar) {
                $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $keahlian->gambar;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            // Upload gambar baru
            $gambar = $request->file('gambar');
            $gambarName = time() . '.' . $gambar->getClientOriginalExtension();
            
            // Tentukan path tujuan
            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/program-studi';
            
            // Buat folder jika belum ada
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }
            
            // Pindahkan file
            $gambar->move($uploadPath, $gambarName);
            
            // Simpan path ke database
            $keahlian->gambar = 'program-studi/' . $gambarName;
        }

        $keahlian->save();

        return redirect()->route('admin.prog_keahlian.index')->with('success', 'Data keahlian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $keahlian = Jurusan::findOrFail($id);

        // Hapus gambar dari folder jika ada
        if ($keahlian->gambar) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $keahlian->gambar;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $keahlian->delete();

        return redirect()->route('admin.prog_keahlian.index')->with('success', 'Data keahlian berhasil dihapus.');
    }
}