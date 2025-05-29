<?php

namespace App\Http\Controllers\Public;

use App\Models\Gtk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GtkController extends Controller
{
    public function index(Request $request)
    {
        $jurusan = $request->query('jurusan');

        // Ambil data GTK yang sesuai, dengan pagination
        $gtk = Gtk::when($jurusan, function ($query) use ($jurusan) {
            $query->where('jurusan', $jurusan);
        })->paginate(12)->withQueryString();

        // Deskripsi berdasarkan jurusan
        $deskripsi = null;
        if ($jurusan) {
            $deskripsi = "Berikut ini daftar" . $jurusan;
        }

        $daftarJurusan = Gtk::select('jurusan')->distinct()->pluck('jurusan');

        return view('wp-public.pages.gtk', compact('gtk', 'jurusan', 'daftarJurusan', 'deskripsi'));
    }
}
