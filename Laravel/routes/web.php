<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa',[MahasiswaController::class,'showMahasiswa']);
Route::get('/mahasiswa/sany',[MahasiswaController::class,'sanyAdikaPrayata']);
Route::get('/dosen',[DosenController::class,'showDosen']);
Route::get('/gallery',[GalleryController::class,'showGallery']);
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// use App\Http\Controllers\Admin\PageController;