<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;


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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Route::resource('/transaksi', TransaksiController::class)->middleware('auth');

Route::resource('/tanaman', TanamanController::class)->middleware('auth');

Route::resource('/supplier', SupplierController::class)->middleware('admin');

Route::resource('/quality', QualityController::class)->middleware('auth');

Route::resource('/user', UserController::class)->middleware('admin');