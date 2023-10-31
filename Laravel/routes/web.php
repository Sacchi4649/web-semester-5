<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    return 'Belajar Laravel';
});

Route::get('/latihan', function () {
    echo '<h1> Sedang Belajar Laravel </h1>';
    echo '<p>Latihan membuat route</p>';
});

Route::get('/mahasiswa/informatika/linds', function () {
    echo '<h2 style="text-align: center"><u>Selamat datang Linds</u></h2>';
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Menampilkan mahasiswa bernama $nama";
});

Route::get('/mahasiswa/{nim}/{nama}', function ($nim, $nama) {
    return "Mahasiswa dengan NIM $nim bernama $nama";
});

Route::get('/mahasiswa/{nim}/{nama}', function ($a, $b) {
    return "Mahasiswa dengan NIM $a bernama $b";
});

Route::get('/mahasiswa/{nim?}/{nama?}', function ($a = '001', $b = 'linds') {
    return "Mahasiswa dengan NIM $a bernama $b";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id=$id";
})->where('id', '[A-Z]{2}[0-9]+');

Route::prefix('/admin')->group(function () {
    Route::get('/mahasiswa', function () {
        echo "<h1>Daftar Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Daftar Dosen</h1>";
    });
    Route::get('/karyawan', function () {
        echo "<h1>Daftar Karyawan</h1>";
    });
});