<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Gtk;
use Illuminate\Support\Facades\File;

class CoursesController extends Controller
{
    public function index()
    {
        $pageTitle = 'Materi';
        $courses = Courses::with('jurusan')->get();
        $kepalaJurusan = Gtk::where('jabatan', 'Kepala Jurusan')->get();
        $jurusan = \App\Models\Jurusan::all();

        return view('wp-admin.pages.courses', compact('pageTitle', 'courses', 'kepalaJurusan', 'jurusan'));
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

        $gambarName = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/courses';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $gambarName = 'courses/' . $namaFile;
        }

        Courses::create([
            'judul_materi' => $request->judul_materi,
            'uraian_singkat' => $request->uraian_singkat,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'jurusan_id' => $request->jurusan_id,
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
            'jurusan_id' => 'required|exists:jurusan,id',
            'nama_ketua_jurusan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $courses = Courses::findOrFail($id);
        $courses->judul_materi = $request->judul_materi;
        $courses->uraian_singkat = $request->uraian_singkat;
        $courses->kelas = $request->kelas;
        $courses->semester = $request->semester;
        $courses->jurusan_id = $request->jurusan_id;
        $courses->nama_ketua_jurusan = $request->nama_ketua_jurusan;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($courses->gambar) {
                $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $courses->gambar;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/courses';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $gambar->move($uploadPath, $namaFile);
            $courses->gambar = 'courses/' . $namaFile;
        }

        $courses->save();

        return redirect()->route('admin.courses.index')->with('success', 'Data courses berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $courses = Courses::findOrFail($id);

        if ($courses->gambar) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $courses->gambar;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $courses->delete();

        return redirect()->route('admin.courses.index')->with('success', 'Data courses berhasil dihapus.');
    }
}
