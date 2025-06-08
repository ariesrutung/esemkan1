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
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SpmbController;
use App\Http\Controllers\Admin\WebAdminController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\JabatanController;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/program-keahlian', [JurusanController::class, 'index']);
Route::get('/program-keahlian/{slug}', [JurusanController::class, 'detail_jurusan'])->name('jurusan.detail');

Route::get('/gtk', [GtkController::class, 'index']);
Route::get('/fasilitas', [FasilitasController::class, 'index']);
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi.index');
Route::get('/informasi/{slug}', [InformasiController::class, 'detail_informasi'])->name('informasi.detail');
Route::get('/spmb', [SubmissionController::class, 'index']);
Route::get('/pk_lapangan', [PklapangController::class, 'index']);


Route::get('/all_galeries', [FasilitasController::class, 'all_galeries']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('galeri_sekolah', GaleriController::class);
    Route::resource('pen_informasi', InfoController::class);
    Route::resource('fasilitas_sekolah', FacilityController::class);
    Route::resource('gt_kependidikan', GuruTKController::class);
    Route::resource('prog_keahlian', KeahlianController::class);
    Route::resource('identity', IdentityController::class);
    Route::resource('pk_lapangan', PklController::class);
    Route::resource('siswa_siswi', SiswaController::class);
    Route::resource('matapelajaran', SubjectController::class);
    Route::resource('courses', CoursesController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('webadmin', WebAdminController::class);

    Route::put('sch-identity-update', [IdentityController::class, 'update'])->name('sch.identity.update');
    Route::get('/get-kode-mapel', [SubjectController::class, 'getKodeMapel'])->name('get-kode-mapel');
    Route::get('pengaturan', [PageSettingsController::class, 'index'])->name('pengaturan.index');
    Route::post('pengaturan/update', [PageSettingsController::class, 'updateSection'])->name('pengaturan.update');


    Route::get('/spmb/settings', [SpmbController::class, 'index'])->name('spmb.index');
    Route::post('/spmb/update', [SpmbController::class, 'updateSpmbSettings'])->name('spmb.update');
});

require __DIR__ . '/auth.php';
