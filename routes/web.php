<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
Route::get('/', function () {
    return view('layouts.starter');
});

Route::get('/1', function () {
    return view('demo.file1');
});

Route::get('/2', [DemoController::class, 'index']);

Route::get('/dosen', [DosenController::class, 'index'])->name('dosenList');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosenCreate');
Route::get('/dosen/edit/{dosen}', [DosenController::class, 'edit'])->name('dosenEdit');
Route::put('/dosen/edit/{dosen}', [DosenController::class, 'update'])->name('dosenUpdate');
Route::post('/dosen/create', [DosenController::class, 'store'])->name('dosenStore');
Route::delete('/dosen/delet/{dosen}', [DosenController::class,  'destroy'])->name('dosenDelete');


Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswaList');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswaCreate');
Route::post('/mahasiswa/create', [MahasiswaController::class, 'store'])->name('mahasiswaStore');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
