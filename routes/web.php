<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LowonganKerja;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApplyController;

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

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/',             [FrontController::class, 'index']);

Auth::routes();
Route::get('/data-lowongankerja',       [LowonganKerja::class, 'index_datalowongan']);
Route::post('/tambahlowongan',          [LowonganKerja::class, 'addLowongan']);
Route::get('/daftar/jobs{id}',                   [LowonganKerja::class, 'daftar']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/administrator/user',       [UserController::class,     'index']);
Route::post('/tambahuser',              [UserController::class,     'addUser']);
Route::post('/edituser/{id}',           [UserController::class,     'editUser']);
Route::post('/hapususer/{id}',          [UserController::class,     'hapusUser']);

Route::get('/siswa',            [UserController::class, 'indexSiswa']);

Route::post('/apply',       [ApplyController::class, 'apply']);
