<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        $query = Informasi::query();

        // Filter berdasarkan kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        // Filter berdasarkan bulan
        if ($request->filled('bulan')) {
            $query->whereMonth('tanggal', $request->bulan);
        }

        $prt_informasi = $query->orderByDesc('tanggal')->paginate(6);

        // Ambil kategori unik dari data
        $kategoriList = Informasi::select('kategori')->distinct()->pluck('kategori');

        // Ambil bulan dari data
        $bulanList = Informasi::selectRaw('MONTH(tanggal) as bulan')
            ->distinct()
            ->orderBy('bulan')
            ->pluck('bulan')
            ->mapWithKeys(function ($bulan) {
                return [$bulan => Carbon::create()->month($bulan)->locale('id')->isoFormat('MMMM')];
            });

        return view('wp-public.pages.informasi', compact('prt_informasi', 'kategoriList', 'bulanList'));
    }
}
