<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBeranda;
use App\Http\Controllers\ControllerHalaman;
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
Route::get('/Target', [TargetController::class, 'index']);
Route::get('/{halaman}', [ControllerHalaman::class, 'index']);
