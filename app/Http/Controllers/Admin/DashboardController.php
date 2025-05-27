<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchIdentity;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Gtk;
use App\Models\Subject;
use App\Models\Jurusan;
use App\Models\Fasilitas;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard Panel Admin';

        $jumlahSiswa = Siswa::count();
        $jumlahGtk = Gtk::count();
        $jumlahMapel = Subject::count();
        $jumlahJurusan = Jurusan::count();
        $jumlahFasilitas = Fasilitas::count();
        $jumlahLaki = Siswa::where('jenis_kelamin', 'Laki-laki')->count();
        $jumlahPerempuan = Siswa::where('jenis_kelamin', 'Perempuan')->count();

        // Hitung jumlah guru per mata pelajaran
        $guruPerMapel = Subject::select('nama')
            ->groupBy('nama')
            ->selectRaw('nama, COUNT(gtk_id) as total')
            ->get();


        return view('wp-admin.pages.dashboard', compact(
            'pageTitle',
            'jumlahSiswa',
            'jumlahGtk',
            'jumlahMapel',
            'jumlahJurusan',
            'jumlahFasilitas',
            'jumlahLaki',
            'jumlahPerempuan',
            'guruPerMapel',
        ));
    }
}
