<?php

use App\Http\Controllers\AktivitasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBeranda;
use App\Http\Controllers\ControllerHalaman;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\TargetController;

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



Route::get('/', [ControllerHalaman::class, 'landing']);
Route::get('/login', [ControllerHalaman::class, 'login']);
Route::get('/Materi', [MateriController::class, 'index']);
Route::get('/Target', [TargetController::class, 'index']);
Route::get('/Aktivitas', [AktivitasController::class, 'index']);
Route::get('/{halaman}', [ControllerHalaman::class, 'index']);

Route::post('/tambahaktivitas', [AktivitasController::class, 'store'])->name('tambahaktivitas');
Route::post('/updateaktivitas', [AktivitasController::class, 'update'])->name('updateaktivitas');
Route::post('/tambahtarget', [TargetController::class, 'store'])->name('tambahtarget');
Route::post('/updatetarget', [TargetController::class, 'update'])->name('updatetarget');
Route::post('/tambahmateri', [MateriController::class, 'store'])->name('tambahmateri');
Route::get('/hapusaktivitas/{id}', [AktivitasController::class, 'destroy']);
Route::get('/hapustarget/{id}', [TargetController::class, 'destroy']);
