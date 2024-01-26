<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Pegawai
Route::resource('pegawai', PegawaiController::class);
Route::post('pegawai/delete/{id}', [PegawaiController::class, 'delete'])->name('pegawai.delete');
Route::post('pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.updated');
// provinsi
Route::resource('provinsi', ProvinsiController::class);
Route::post('provinsi/delete/{id}', [ProvinsiController::class, 'delete'])->name('provinsi.delete');
Route::post('provinsi/update/{id}', [ProvinsiController::class, 'update'])->name('provinsi.updated');
// kecamatan
Route::resource('kecamatan', KecamatanController::class);
Route::post('kecamatan/delete/{id}', [KecamatanController::class, 'delete'])->name('kecamatan.delete');
Route::post('kecamatan/update/{id}', [KecamatanController::class, 'update'])->name('kecamatan.updated');
// desa
Route::resource('kelurahan', KelurahanController::class);
Route::post('kelurahan/delete/{id}', [KelurahanController::class, 'delete'])->name('kelurahan.delete');
Route::post('kelurahan/update/{id}', [KelurahanController::class, 'update'])->name('kelurahan.updated');
