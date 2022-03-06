<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LowonganKerja;
use App\Http\Controllers\UserController;

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

Route::get('/admin', function () {
    return view('administrator.index');
});

Route::get('/',             [FrontController::class, 'index']);

Route::get('/data-lowongankerja',       [LowonganKerja::class, 'index_datalowongan']);
Route::post('/tambahlowongan',          [LowonganKerja::class, 'addLowongan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/administrator/user',       [UserController::class,     'index']);
Route::post('/tambahuser',              [UserController::class,     'addUser']);
Route::post('/edituser/{id}',           [UserController::class,     'editUser']);
Route::post('/hapususer/{id}',          [UserController::class,     'hapusUser']);

Route::get('/siswa',            [UserController::class, 'indexSiswa']);
