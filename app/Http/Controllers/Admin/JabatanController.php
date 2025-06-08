<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $pageTitle = 'Daftar Jabatan';
        $jabatan = Jabatan::all();

        return view('wp-admin.pages.jabatan', compact('pageTitle', 'jabatan'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_jabatan' => 'required|string|max:255',
            'kategori' => 'nullable|string',
        ]);
        Jabatan::create([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_jabatan' => $request->nama_jabatan,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('admin.jabatan.index')->with('success', 'Jabatan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_jabatan' => 'required|string|max:255',
            'kategori' => 'nullable|string',
        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update([
            'nama_lengkap' => $request->nama_lengkap,
            'nama_jababtan' => $request->nama_jabatan,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('admin.jabatan.index')->with('success', 'Jabatan berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('admin.jabatan.index')->with('success', 'Jabatan berhasil dihapus.');
    }
}
