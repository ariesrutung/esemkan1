<?php

namespace App\Http\Controllers\Public;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;

class FasilitasController extends Controller
{
    public function index()
    {
        $prt_fasilitas = Fasilitas::all();
        return view('wp-public.pages.fasilitas', compact('prt_fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('fasilitas', 'public');
        }

        Fasilitas::create($validated);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan.');
    }

    public function edit(Fasilitas $fasilitas)
    {
        return view('fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, Fasilitas $fasilitas)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:0',
            'foto' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('fasilitas', 'public');
        }

        $fasilitas->update($validated);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui.');
    }

    public function destroy(Fasilitas $fasilitas)
    {
        $fasilitas->delete();
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus.');
    }
}
