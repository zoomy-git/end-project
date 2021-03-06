<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ControllerHalaman;
use App\Http\Controllers\AktivitasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', [BerandaController::class, 'index']);
    Route::get('/dashboard', [ControllerHalaman::class, 'beranda']);
    Route::get('/Materi', [MateriController::class, 'index']);
    Route::get('/Target', [TargetController::class, 'index']);
    Route::get('/Aktivitas', [AktivitasController::class, 'index']);
    Route::get('/Beranda', [BerandaController::class, 'index']);
    Route::get('/{halaman}', [ControllerHalaman::class, 'index']);

    Route::post('/tambahaktivitas', [AktivitasController::class, 'store'])->name('tambahaktivitas');
    Route::post('/updateaktivitas', [AktivitasController::class, 'update'])->name('updateaktivitas');
    Route::post('/tambahtarget', [TargetController::class, 'store'])->name('tambahtarget');
    Route::post('/updatetarget', [TargetController::class, 'update'])->name('updatetarget');
    Route::post('/tambahmateri', [MateriController::class, 'store'])->name('tambahmateri');
    Route::post('/updatemateri', [MateriController::class, 'update'])->name('updatemateri');
    Route::get('/hapusaktivitas/{id}', [AktivitasController::class, 'destroy']);
    Route::get('/hapustarget/{id}', [TargetController::class, 'destroy']);
    Route::get('/hapusmateri/{id}', [MateriController::class, 'destroy']);
});
