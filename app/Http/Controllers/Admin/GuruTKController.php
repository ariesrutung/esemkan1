<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gtk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GuruTKController extends Controller
{
    public function index()
    {
        $jabatanList = [
            'Kepala Sekolah',
            'Wakil Kepala Sekolah',
            'Guru',
            'Kepala Jurusan',
            'Staf TU',
            'Staf IT'
        ];
        $jurusanList = [
            'Umum',
            'Akuntansi',
            'Layanan Perbankan',
            'Manajemen Perkantoran',
            'Manajemen Logistik',
            'Bisnis Ritel',
            'Usaha Layanan Pariwisata',
        ];

        $gtk = Gtk::all();
        $pageTitle = 'Guru & Tenaga Kependidikan';
        return view('wp-admin.pages.gtk', compact('gtk', 'pageTitle', 'jabatanList', 'jurusanList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string',
            'jurusan' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nip' => 'required|string',
            'nuptk' => 'required|string',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $fotoName = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $namaFile = time() . '.' . $foto->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/gtk';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $foto->move($uploadPath, $namaFile);
            $fotoName = 'gtk/' . $namaFile;
        }

        Gtk::create([
            'nama_lengkap' => $request->nama_lengkap,
            'jabatan' => $request->jabatan,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'foto' => $fotoName,
        ]);

        return redirect()->route('admin.gt_kependidikan.index')->with('success', 'Data GTK berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jabatan' => 'required|string',
            'jurusan' => 'required|string',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nip' => 'nullable|string',
            'nuptk' => 'nullable|string',
            'no_hp' => 'required|string',
            'alamat' => 'required|string',
            'foto' => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $gtk = Gtk::findOrFail($id);

        $gtk->fill($request->only([
            'nama_lengkap',
            'jabatan',
            'jurusan',
            'jenis_kelamin',
            'nip',
            'nuptk',
            'no_hp',
            'alamat'
        ]));

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada dan bukan file default
            if ($gtk->foto && !str_starts_with(basename($gtk->foto), 'default')) {
                $oldPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $gtk->foto;
                if (File::exists($oldPath)) {
                    File::delete($oldPath);
                }
            }

            $foto = $request->file('foto');
            $namaFile = time() . '.' . $foto->getClientOriginalExtension();

            $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/gtk';

            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            $foto->move($uploadPath, $namaFile);
            $gtk->foto = 'gtk/' . $namaFile;
        }

        $gtk->save();

        return redirect()->route('admin.gt_kependidikan.index')->with('success', 'Data GTK berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gtk = Gtk::findOrFail($id);

        // Hapus foto jika ada dan bukan file default
        if ($gtk->foto && !str_starts_with(basename($gtk->foto), 'default')) {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/public/themes/' . $gtk->foto;
            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $gtk->delete();

        return redirect()->route('admin.gt_kependidikan.index')->with('success', 'Data GTK berhasil dihapus.');
    }
}
