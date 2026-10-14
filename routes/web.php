<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PoliController;

// Redirect halaman utama ke dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Resource Routes untuk CRUD Pasien dan Poli
Route::resource('pasien', PatientController::class);
Route::resource('poli', PoliController::class);

// Read-only / CRUD Dokter dari praktikum sebelumnya
Route::get('/dokter', [DoctorController::class, 'index'])->name('dokter.index');