<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('wp-public.pages.home');
});
Route::get('/profil', function () {
    return view('wp-public.pages.profil');
});
Route::get('/publikasi', function () {
    return view('wp-public.pages.publikasi');
});
Route::get('/fasilitas', function () {
    return view('wp-public.pages.fasilitas');
});
Route::get('/gtk', function () {
    return view('wp-public.pages.gtk');
});
Route::get('/siswa', function () {
    return view('wp-public.pages.siswa');
});
Route::get('/galeri', function () {
    return view('wp-public.pages.galeri');
});

Route::get('/admin-dashboard', function () {
    return view('wp-admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/manage-beranda', fn() => view('wp-admin.pages.beranda'))->name('manage-beranda');
    Route::get('/manage-profil', fn() => view('wp-admin.pages.profil'))->name('manage-profil');
    Route::get('/manage-publikasi', fn() => view('wp-admin.pages.publikasi'))->name('manage-publikasi');
    Route::get('/manage-fasilitas', fn() => view('wp-admin.pages.fasilitas'))->name('manage-fasilitas');
    Route::get('/manage-gtk', fn() => view('wp-admin.pages.gtk'))->name('manage-gtk');
    Route::get('/manage-siswa', fn() => view('wp-admin.pages.siswa'))->name('manage-siswa');
    Route::get('/manage-galeri', fn() => view('wp-admin.pages.galeri'))->name('manage-galeri');
    Route::get('/manage-pengumuman', fn() => view('wp-admin.pages.pengumuman'))->name('manage-pengumuman');
    Route::get('/manage-ppdb', fn() => view('wp-admin.pages.ppdb'))->name('manage-ppdb');

    // Pengaturan
    // Route::get('/manage-pengelola-website', fn() => view('wp-admin.pages.pengelola-website'))->name('manage-pengelola-website');
    // Route::get('/manage-role', fn() => view('wp-admin.pages.role'))->name('manage-role');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
