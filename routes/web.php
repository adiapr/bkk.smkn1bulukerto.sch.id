<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LowonganKerja;

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
