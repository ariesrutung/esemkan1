<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gtk;
use Illuminate\Http\Request;

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
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('themes/frontend/assets/img/gtk'), $fotoName);
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
        $gtk->nama_lengkap = $request->nama_lengkap;
        $gtk->jabatan = $request->jabatan;
        $gtk->jurusan = $request->jurusan;
        $gtk->jenis_kelamin = $request->jenis_kelamin;
        $gtk->no_hp = $request->no_hp;
        $gtk->nip = $request->nip;
        $gtk->nuptk = $request->nuptk;
        $gtk->alamat = $request->alamat;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($gtk->foto && file_exists(public_path('themes/frontend/assets/img/gtk/' . $gtk->foto))) {
                unlink(public_path('themes/frontend/assets/img/gtk/' . $gtk->foto));
            }

            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('themes/frontend/assets/img/gtk'), $namaFoto);
            $gtk->foto = $namaFoto;
        }

        $gtk->save();

        return redirect()->route('admin.gt_kependidikan.index')->with('success', 'Data GTK berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $gtk = Gtk::findOrFail($id);

        // Hapus foto dari storage jika ada
        if ($gtk->foto && file_exists(public_path('themes/frontend/assets/img/gtk/' . $gtk->foto))) {
            unlink(public_path('themes/frontend/assets/img/gtk/' . $gtk->foto));
        }

        $gtk->delete();

        return redirect()->route('admin.gt_kependidikan.index')->with('success', 'Data GTK berhasil dihapus.');
    }
}
