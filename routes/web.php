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

Route::get('/dashboard', function () {
    return view('wp-admin.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
