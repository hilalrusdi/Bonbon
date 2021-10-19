<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\TransaksiController;


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




Route::get('/nav', function () {
    return view('nav');
});

Route::get('/navbar', function () {
    return view('navbar');
});

// Route::get('/', [TestController::class, 'index']);



Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard',[DashboardController::class, 'admin'])->name('admin')->middleware('auth','CekLevel:admin');

Route::get('/registration',[RegistrationController::class, 'index']);
Route::post('/registration',[RegistrationController::class, 'store']);

Route::get('/tanaman',[TanamanController::class, 'index'])->middleware('auth');
Route::delete('/tanaman/{id}',[TanamanController::class, 'delete'])->middleware('auth');

Route::put('/tanaman/{id}/edit',[TanamanController::class, 'edit'])->middleware('auth');
Route::post('/tanaman/{id}/edit',[TanamanController::class, 'update'])->middleware('auth');

Route::get('/tanaman/tambah',[TanamanController::class, 'show'])->middleware('auth');
Route::post('/tanaman/tambah',[TanamanController::class, 'store']);


Route::get('/transaksi',[TransaksiController::class, 'index'])->middleware('auth');
Route::delete('/transaksi/{id}',[TransaksiController::class, 'delete'])->middleware('auth');
Route::get('/detail/{id}', [TransaksiController::class, 'detail'])->middleware('auth');

// Route::get('/transaksi/tambah',[TransaksiController::class, 'check'])->middleware('auth');
Route::get('/transaksi/tambah',[TransaksiController::class, 'create'])->middleware('auth');
Route::post('/transaksi/tambah',[TransaksiController::class, 'store'])->middleware('auth');

Route::put('/transaksi/{id}/edit',[TransaksiController::class, 'edit'])->middleware('auth');
Route::post('/transaksi/{id}/edit',[TransaksiController::class, 'update'])->middleware('auth');

Route::get('/karyawan',[KaryawanController::class, 'index'])->middleware('auth');
Route::delete('/karyawan/{id}',[KaryawanController::class, 'delete'])->middleware('auth');
Route::put('/karyawan/{id}/edit',[KaryawanController::class, 'edit'])->middleware('auth');



Route::get('/supplier',[SupplierController::class, 'index'])->middleware('auth');
Route::delete('/supplier/{id}',[SupplierController::class, 'delete'])->middleware('auth');
Route::put('/supplier/{id}/edit',[SupplierController::class, 'edit'])->middleware('auth');
Route::get('/supplier/tambah',[SupplierController::class, 'show'])->middleware('auth');
Route::post('/supplier/tambah',[SupplierController::class, 'store']);




