<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerBeranda;
use App\Http\Controllers\ControllerHalaman;

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
Route::get('/{halaman}', [ControllerHalaman::class, 'index']);
//hello
