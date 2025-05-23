<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeSettingController;
use App\Http\Controllers\Public\ProfilController;
use App\Http\Controllers\Public\BerandaController;
use App\Http\Controllers\Public\JurusanController;
use App\Http\Controllers\Public\GtkController;
use App\Http\Controllers\Public\FasilitasController;
use App\Http\Controllers\Public\InformasiController;
use App\Http\Controllers\Public\SubmissionController;

Route::get('/', function () {
    return view('wp-public.pages.home');
});


Route::get('/', [BerandaController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/program-keahlian', [JurusanController::class, 'index']);
Route::get('/gtk', [GtkController::class, 'index']);
Route::get('/fasilitas', [FasilitasController::class, 'index']);
// Route::get('/informasi', [InformasiController::class, 'index']);

Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/spmb', [SubmissionController::class, 'index']);


Route::get('/publikasi', function () {
    return view('wp-public.pages.publikasi');
});

Route::get('/siswa', function () {
    return view('wp-public.pages.siswa');
});

Route::get('/galeri', function () {
    return view('wp-public.pages.galeri');
});

Route::get('/ppl', function () {
    return view('wp-public.pages.ppl');
});


Route::get('/bk', function () {
    return view('wp-public.pages.bk');
});

Route::get('/admin-dashboard', function () {
    return view('wp-admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// routes/web.php

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/home-settings', [HomeSettingController::class, 'index'])->name('home-settings.index');
    // Route::post('/admin/home-settings', [HomeSettingController::class, 'update'])->name('admin.home-settings.update');
    Route::post('/admin/home-settings/beranda', [HomeSettingController::class, 'updateBeranda'])->name('home-settings.beranda');
    Route::post('/admin/home-settings/quote', [HomeSettingController::class, 'updateQuote'])->name('home-settings.quote');
    Route::post('/admin/home-settings/benefit', [HomeSettingController::class, 'updateBenefit'])->name('home-settings.benefit');
    Route::post('/admin/home-settings/programkeahlian', [HomeSettingController::class, 'updatePrograkeahlian'])->name('home-settings.programkeahlian');



    // Route::get('/manage-beranda', fn() => view('wp-admin.pages.beranda'))->name('manage-beranda');
    // Route::get('/manage-profil', fn() => view('wp-admin.pages.profil'))->name('manage-profil');
    // Route::get('/manage-publikasi', fn() => view('wp-admin.pages.publikasi'))->name('manage-publikasi');
    // Route::get('/manage-fasilitas', fn() => view('wp-admin.pages.fasilitas'))->name('manage-fasilitas');
    // Route::get('/manage-gtk', fn() => view('wp-admin.pages.gtk'))->name('manage-gtk');
    // Route::get('/manage-siswa', fn() => view('wp-admin.pages.siswa'))->name('manage-siswa');
    // Route::get('/manage-galeri', fn() => view('wp-admin.pages.galeri'))->name('manage-galeri');
    // Route::get('/manage-pengumuman', fn() => view('wp-admin.pages.pengumuman'))->name('manage-pengumuman');
    // Route::get('/manage-ppdb', fn() => view('wp-admin.pages.ppdb'))->name('manage-ppdb');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
