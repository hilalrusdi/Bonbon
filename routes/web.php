<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TanamanController;

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

Route::get('/', function () {
    return view('login/index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/navbar', function () {
    return view('navbar');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::get('/registration',[RegistrationController::class, 'index']);
Route::post('/registration',[RegistrationController::class, 'store']);

Route::get('/tanaman',[TanamanController::class, 'index'])->middleware('auth');

Route::get('/karyawan',[KaryawanController::class, 'index'])->middleware('auth');

Route::get('/supplier',[SupplierController::class, 'index'])->middleware('auth');




