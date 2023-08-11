<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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
    return view('landing-page');
})->middleware(['guest']);

Route::get('/dashboard', [KaryawanController::class, 'index'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::resource('/blog', PostsController::class);

Route::resource('karyawan', KaryawanController::class)->middleware(['auth']);

Route::get('/delete/{no_karyawan}', [KaryawanController::class, 'destroy'])->name('delete');
Route::get('exportPDF', [KaryawanController::class, 'exportPDF'])->name('karyawan.pdf');
Route::get('exportExcel',[KaryawanController::class,'exportExcel'])->name('karyawan.excel');
