<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

            $path = $gambar->storeAs('program-studi', $gambarName, 'public');

            $gambarName = $path; // simpan path lengkap ke database
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

        $slug = Str::slug($request->nama);

        $keahlian = Jurusan::findOrFail($id);
        $keahlian->nama = $request->nama;
        $keahlian->slug = $slug;
        $keahlian->kode = $request->kode;
        $keahlian->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {

    // hapus gambar lama dari storage
        if ($keahlian->gambar && Storage::disk('public')->exists($keahlian->gambar)) {
            Storage::disk('public')->delete($keahlian->gambar);
        }

        $gambar = $request->file('gambar');
        $gambarName = time() . '.' . $gambar->getClientOriginalExtension();

        $path = $gambar->storeAs('program-studi', $gambarName, 'public');

        $keahlian->gambar = $path;
    }

        $keahlian->save();

        return redirect()->route('admin.prog_keahlian.index')->with('success', 'Data keahlian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $keahlian = Jurusan::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($keahlian->gambar && Storage::disk('public')->exists($keahlian->gambar)) {
            Storage::disk('public')->delete($keahlian->gambar);
        }

        $keahlian->delete();

        return redirect()->route('admin.prog_keahlian.index')->with('success', 'Data keahlian berhasil dihapus.');
    }
}
