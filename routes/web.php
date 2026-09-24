<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PoliController;

// Route bawaan halaman awal
Route::get('/', function () {
    return view('welcome');
});

// Route Praktik Terbimbing 1, 2, dan 3 (Pasien)
Route::get('/pasien', [PatientController::class, 'index'])->name('pasien.index');
Route::get('/pasien/{id}', [PatientController::class, 'show']);

// Route Praktik Terbimbing 4 (Dokter dan Poli)
Route::get('/dokter', [DoctorController::class, 'index'])->name('dokter.index');
Route::get('/poli', [PoliController::class, 'index'])->name('poli.index');

// Route Mini Challenge Individu (Jadwal)
Route::get('/jadwal', [ScheduleController::class, 'index'])->name('jadwal.index');
Route::get('/jadwal/{hari}', [ScheduleController::class, 'show']);