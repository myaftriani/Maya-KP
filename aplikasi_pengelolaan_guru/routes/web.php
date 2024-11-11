<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalMengajarController;
use App\Http\Controllers\PresensiGuruController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::post('/guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::patch('/guru/{id}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/jadwal', [JadwalMengajarController::class, 'index'])->name('jadwal.index');
    Route::get('/jadwal/create', [JadwalMengajarController::class, 'create'])->name('jadwal.create');
    Route::post('/jadwal', [JadwalMengajarController::class, 'store'])->name('jadwal.store');
    Route::get('/jadwal/{id}/edit', [JadwalMengajarController::class, 'edit'])->name('jadwal.edit');
    Route::match(['put', 'patch'], '/jadwal/{id}', [JadwalMengajarController::class, 'update'])->name('jadwal.update');
    Route::delete('/jadwal/{id}', [JadwalMengajarController::class, 'destroy'])->name('jadwal.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/presensi', [PresensiGuruController::class, 'index'])->name('presensi.index');
    Route::get('/presensi/create', [PresensiGuruController::class, 'create'])->name('presensi.create');
    Route::post('/presensi', [PresensiGuruController::class, 'store'])->name('presensi.store');
    Route::get('/presensi/{id}/edit', [PresensiGuruController::class, 'edit'])->name('presensi.edit');
    Route::match(['put', 'patch'], '/presensi/{id}', [PresensiGuruController::class, 'update'])->name('presensi.update');
    Route::delete('/presensi/{id}', [PresensiGuruController::class, 'destroy'])->name('presensi.destroy');
});

require __DIR__ . '/auth.php';
