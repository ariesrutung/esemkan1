<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gtk;

class CoursesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Materi';
        $courses = Courses::all();
        $kepalaJurusan = Gtk::where('jabatan', 'Kepala Jurusan')->get();

        return view('wp-admin.pages.courses', compact('pageTitle', 'courses', 'kepalaJurusan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_materi' => 'required|string|max:255',
            'uraian_singkat' => 'required|string',
            'kelas' => 'required|string',
            'semester' => 'required|string',
            'nama_ketua_jurusan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        // Default value
        $gambarName = 'default.png';

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('themes/frontend/assets/img/courses'), $gambarName);
        }

        Courses::create([
            'judul_materi' => $request->judul_materi,
            'uraian_singkat' => $request->uraian_singkat,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'nama_ketua_jurusan' => $request->nama_ketua_jurusan,
            'gambar' => $gambarName,
        ]);

        return redirect()->route('admin.courses.index')->with('success', 'Data Materi berhasil ditambahkan.');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_materi' => 'required|string|max:255',
            'uraian_singkat' => 'required|string',
            'kelas' => 'required|string',
            'semester' => 'required|string',
            'nama_ketua_jurusan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $courses = Courses::findOrFail($id);
        $courses->judul_materi = $request->judul_materi;
        $courses->uraian_singkat = $request->uraian_singkat;
        $courses->kelas = $request->kelas;
        $courses->semester = $request->semester;
        $courses->nama_ketua_jurusan = $request->nama_ketua_jurusan;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika bukan default.png
            if (
                $courses->gambar &&
                $courses->gambar !== 'default.png' &&
                file_exists(public_path('themes/frontend/assets/img/courses/' . $courses->gambar))
            ) {
                unlink(public_path('themes/frontend/assets/img/courses/' . $courses->gambar));
            }

            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('themes/frontend/assets/img/courses'), $namaGambar);
            $courses->gambar = $namaGambar;
        }

        $courses->save();

        return redirect()->route('admin.courses.index')->with('success', 'Data courses berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $courses = Courses::findOrFail($id);

        // Hapus gambar jika bukan default.png
        if (
            $courses->gambar &&
            $courses->gambar !== 'default.png' &&
            file_exists(public_path('themes/frontend/assets/img/courses/' . $courses->gambar))
        ) {
            unlink(public_path('themes/frontend/assets/img/courses/' . $courses->gambar));
        }

        $courses->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Data courses berhasil dihapus.');
    }
}
