<?php

namespace App\Http\Controllers\Public;

use App\Models\Gtk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GtkController extends Controller
{
    public function index(Request $request)
    {
        $jabatan = $request->query('jabatan');

        // Ambil data GTK yang sesuai, dengan pagination
        $gtk = Gtk::when($jabatan, function ($query) use ($jabatan) {
            $query->where('jabatan', $jabatan);
        })->paginate(12)->withQueryString();

        // Deskripsi berdasarkan jabatan
        $deskripsi = null;
        if ($jabatan) {
            $deskripsi = "Berikut ini daftar" . $jabatan;
        }

        $daftarJabatan = Gtk::select('jabatan')->distinct()->pluck('jabatan');

        return view('wp-public.pages.gtk', compact('gtk', 'jabatan', 'daftarJabatan', 'deskripsi'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string',
            'jabatan' => 'required|string',
            'nip' => 'nullable|string|unique:gtk,nip',
            'nuptk' => 'nullable|string|unique:gtk,nuptk',
            'no_hp' => 'nullable|string',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        $employee = Gtk::create($validated);
        return response()->json($employee, 201);
    }

    public function show(Gtk $employee)
    {
        return response()->json($employee);
    }

    public function update(Request $request, Gtk $employee)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string',
            'jabatan' => 'required|string',
            'nip' => 'nullable|string|unique:gtk,nip,' . $employee->id,
            'nuptk' => 'nullable|string|unique:gtk,nuptk,' . $employee->id,
            'no_hp' => 'nullable|string',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        $employee->update($validated);
        return response()->json($employee);
    }

    public function destroy(Gtk $employee)
    {
        $employee->delete();
        return response()->json(null, 204);
    }
}
