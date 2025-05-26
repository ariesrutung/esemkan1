<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $pageTitle = 'Peserta Didik';
        return view('wp-admin.pages.siswa', compact('siswa', 'pageTitle'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap'   => 'required|string|max:255',
            'nisn'           => 'string|max:16',
            'kelas'          => 'string|max:10',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir'   => 'required|string',
            'tanggal_lahir'  => 'required|date',
            'alamat'         => 'required|string',
            'no_hp'          => 'required|string',
            'foto'           => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $fotoName = null;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('themes/frontend/assets/img/siswa'), $fotoName);
        }

        Siswa::create([
            'nama_lengkap'   => $request->nama_lengkap,
            'nisn'   => $request->nisn,
            'kelas'   => $request->kelas,
            'jenis_kelamin'  => $request->jenis_kelamin,
            'tempat_lahir'   => $request->tempat_lahir,
            'tanggal_lahir'  => $request->tanggal_lahir,
            'alamat'         => $request->alamat,
            'no_hp'          => $request->no_hp,
            'foto'           => $fotoName,
        ]);

        return redirect()->route('admin.siswa_siswi.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap'   => 'required|string|max:255',
            'nisn'           => 'string|max:16',
            'kelas'          => 'string|max:10',
            'jenis_kelamin'  => 'required|in:Laki-laki,Perempuan',
            'tempat_lahir'   => 'required|string',
            'tanggal_lahir'  => 'required|date',
            'alamat'         => 'required|string',
            'no_hp'          => 'required|string',
            'foto'           => 'nullable|image|mimes:webp,jpeg,png,jpg|max:2048',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->nama_lengkap  = $request->nama_lengkap;
        $siswa->nisn  = $request->nisn;
        $siswa->kelas  = $request->kelas;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tempat_lahir  = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat        = $request->alamat;
        $siswa->no_hp         = $request->no_hp;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($siswa->foto && file_exists(public_path('themes/frontend/assets/img/siswa/' . $siswa->foto))) {
                unlink(public_path('themes/frontend/assets/img/siswa/' . $siswa->foto));
            }

            $foto = $request->file('foto');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('themes/frontend/assets/img/siswa'), $namaFoto);
            $siswa->foto = $namaFoto;
        }

        $siswa->save();

        return redirect()->route('admin.siswa_siswi.index')->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        // Hapus foto dari storage jika ada
        if ($siswa->foto && file_exists(public_path('themes/frontend/assets/img/siswa/' . $siswa->foto))) {
            unlink(public_path('themes/frontend/assets/img/siswa/' . $siswa->foto));
        }

        $siswa->delete();

        return redirect()->route('admin.siswa_siswi.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
