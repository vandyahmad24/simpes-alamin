<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Santri\DashboardController;
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

Route::get('/home', [FrontController::class, 'index'])->name('home');

Route::group(['prefix' => 'santri','middleware' => ['role:santri']], function() {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('santri-dashboard');
});

Route::group(['prefix' => 'admin','middleware' => ['role:admin']], function() {
    Route::get('/dashboard', [AdminDashboardController::class,'index'])->name('admin-dashboard');
});