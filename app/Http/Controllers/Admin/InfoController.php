<?php

namespace App\Http\Controllers\Admin;

use App\Models\Informasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:1024',
            'tanggal' => 'required|date',
            'jam' => 'required|date_format:H:i',
            'tempat' => 'required|string|max:255',
        ]);

        $gambarName = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/informasi';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $gambarName = 'informasi/' . $namaFile;
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
            'jam' => 'required|date_format:H:i',
            'tempat' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:1024',
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
            // Hapus gambar lama jika ada dan bukan file default
            if ($informasi->gambar && !str_starts_with(basename($informasi->gambar), 'default')) {
                $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $informasi->gambar;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/informasi';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $informasi->gambar = 'informasi/' . $namaFile;
        }

        $informasi->save();

        return redirect()->route('admin.pen_informasi.index')->with('success', 'Data informasi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $informasi = Informasi::findOrFail($id);

        // Hapus gambar jika ada dan bukan file default
        if ($informasi->gambar && !str_starts_with(basename($informasi->gambar), 'default')) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $informasi->gambar;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $informasi->delete();

        return redirect()->route('admin.pen_informasi.index')->with('success', 'Data informasi berhasil dihapus.');
    }
}
