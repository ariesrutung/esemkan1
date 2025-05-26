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
use App\Http\Controllers\Public\PklapangController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\GuruTKController;
use App\Http\Controllers\Admin\KeahlianController;
use App\Http\Controllers\Admin\IdentityController;
use App\Http\Controllers\Admin\PklController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\PageSettingsController;
use App\Http\Controllers\Admin\SubjectController;
use App\Models\Informasi;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/program-keahlian', [JurusanController::class, 'index']);
Route::get('/gtk', [GtkController::class, 'index']);
Route::get('/fasilitas', [FasilitasController::class, 'index']);
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/spmb', [SubmissionController::class, 'index']);
Route::get('/pk_lapangan', [PklapangController::class, 'index']);

Route::get('/galeri', fn() => view('wp-public.pages.galeri'));

Route::get('/admin-dashboard', fn() => view('wp-admin.pages.dashboard'))
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    // Home setting
    Route::get('/home-settings', [HomeSettingController::class, 'index'])->name('home-settings.index');
    Route::get('/profil-settings', [HomeSettingController::class, 'profil_settings'])->name('profil-settings.index');
    Route::get('/gtk-settings', [HomeSettingController::class, 'gtk_settings'])->name('gtk-settings.index');
    Route::get('/fasilitas-settings', [HomeSettingController::class, 'fasilitas_settings'])->name('fasilitas-settings.index');
    Route::get('/keahlian-settings', [HomeSettingController::class, 'keahlian_settings'])->name('keahlian-settings.index');
    Route::get('/pkl-settings', [HomeSettingController::class, 'pkl_settings'])->name('pkl-settings.index');
    Route::get('/informasi-settings', [HomeSettingController::class, 'informasi_settings'])->name('informasi-settings.index');
    Route::get('/spmb-settings', [HomeSettingController::class, 'spmb_settings'])->name('spmb-settings.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('galeri_sekolah', GaleriController::class);
    Route::resource('pen_informasi', InfoController::class);
    Route::resource('fasilitas_sekolah', FacilityController::class);
    Route::resource('gt_kependidikan', GuruTKController::class);
    Route::resource('prog_keahlian', KeahlianController::class);
    Route::resource('identity', IdentityController::class);
    Route::resource('pk_lapangan', PklController::class);
    Route::resource('siswa_siswi', SiswaController::class);
    Route::resource('pengaturan', PageSettingsController::class);
    Route::resource('matapelajaran', SubjectController::class);
    Route::put('sch-identity-update', [IdentityController::class, 'update'])->name('sch.identity.update');


    // Home
    Route::post('/home-section1/update', [HomeSettingController::class, 'updateSection1'])->name('home-section1.update');
    Route::post('/home-section1/update', [HomeSettingController::class, 'updateSection1'])->name('home-section1.update');
    Route::post('/home-section2/update', [HomeSettingController::class, 'updateSection2'])->name('home-section2.update');
    Route::post('/home-section3/update', [HomeSettingController::class, 'updateSection3'])->name('home-section3.update');
    Route::post('/home-section4/update', [HomeSettingController::class, 'updateSection4'])->name('home-section4.update');
    Route::post('/home-section5/update', [HomeSettingController::class, 'updateSection5'])->name('home-section5.update');
    Route::post('/home-section6/update', [HomeSettingController::class, 'updateSection6'])->name('home-section6.update');
    Route::post('/home-section7/update', [HomeSettingController::class, 'updateSection7'])->name('home-section7.update');

    // Profil
    Route::post('/profil/update', [HomeSettingController::class, 'profil_settings'])->name('profil.update');
    Route::post('/gtk/update', [HomeSettingController::class, 'gtk_settings'])->name('gtk.update');
    Route::post('/fasilitas/update', [HomeSettingController::class, 'fasilitas_settings'])->name('fasilitas.update');
    Route::post('/keahlian/update', [HomeSettingController::class, 'keahlian_settings'])->name('keahlian.update');
    Route::post('/informasi/update', [HomeSettingController::class, 'informasi_settings'])->name('informasi.update');
    Route::post('/pkl/update', [HomeSettingController::class, 'pkl_settings'])->name('pkl.update');

    Route::post('/spmb/update', [HomeSettingController::class, 'spmb_settings'])->name('spmb.update');
    Route::post('/spmb/update', [HomeSettingController::class, 'updateSpmbSettings'])->name('spmb.update');

    Route::get('/spmb/settings', [HomeSettingController::class, 'showSpmbSettings'])->name('spmb.settings');
    Route::post('/spmb/update', [HomeSettingController::class, 'updateSpmbSettings'])->name('spmb.update');
});

require __DIR__ . '/auth.php';
