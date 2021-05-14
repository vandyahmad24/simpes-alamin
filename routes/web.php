<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class, 'index'])->name('root');
Route::get('daftar-online', [PendaftaranController::class, 'index'])->name('daftar-online');
Route::post('daftar-online', [PendaftaranController::class, 'add'])->name('add-daftar-online');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
