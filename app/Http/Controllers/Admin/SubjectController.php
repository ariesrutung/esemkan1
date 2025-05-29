<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Gtk;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $pageTitle = 'Mata Pelajaran';
        $mapel = Subject::all();
        $gtk = Gtk::all();

        return view('wp-admin.pages.matapelajaran', compact('pageTitle', 'mapel', 'gtk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kode = $this->generateKodeMapel($request->nama);

        Subject::create([
            'nama' => $request->nama,
            'kode' => $kode,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.matapelajaran.index')->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }

    private function generateKodeMapel($nama)
    {
        // Ambil inisial dari setiap kata
        $words = explode(' ', strtoupper($nama));
        $prefix = '';
        foreach ($words as $word) {
            if (preg_match('/[A-Z]/', $word)) {
                $prefix .= substr($word, 0, 1); // ambil huruf pertama tiap kata
            }
        }

        // Jika hanya 1 huruf, ambil 2 huruf pertama dari nama
        if (strlen($prefix) < 2) {
            $prefix = strtoupper(substr(preg_replace('/[^A-Za-z]/', '', $nama), 0, 2));
        }

        // Hitung kode yang sudah ada dengan prefix ini
        $existingCount = Subject::where('kode', 'like', $prefix . '%')->count();
        $number = str_pad($existingCount + 1, 3, '0', STR_PAD_LEFT);

        return $prefix . $number;
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $matapelajaran = Subject::findOrFail($id);
        $matapelajaran->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin.matapelajaran.index')->with('success', 'Mata pelajaran berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $matapelajaran = Subject::findOrFail($id);
        $matapelajaran->delete();

        return redirect()->route('admin.matapelajaran.index')->with('success', 'Mata pelajaran berhasil dihapus.');
    }

    public function getKodeMapel(Request $request)
    {
        $nama = $request->get('nama');
        if (!$nama) {
            return response()->json(['kode' => '']);
        }

        $kode = $this->generateKodeMapel($nama);
        return response()->json(['kode' => $kode]);
    }
}
