<?php

namespace App\Http\Controllers\Public;

use Carbon\Carbon;
use App\Models\Informasi;
use App\Models\PageSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();
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

        return view('wp-public.pages.informasi', compact('prt_informasi', 'kategoriList', 'bulanList', 'pages_settings'));
    }

    public function detail_informasi($slug)
    {
        $informasi = Informasi::where('slug', $slug)->firstOrFail();
        $pages_settings = PageSettings::pluck('value', 'key')->toArray();

        $related_informasi = Informasi::where('id', '!=', $informasi->id)->limit(10)->get();

        return view('wp-public.pages.detail-informasi', compact('informasi', 'pages_settings', 'related_informasi'));
    }
}
