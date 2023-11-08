<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GalleryController;
//Modul Routing
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

// Route::get('/mahasiswa/informatika/linds', function () {
//     echo '<h2 style="text-align: center"><u>Selamat datang Linds</u></h2>';
// });

// Route::get('/mahasiswa/{nama}', function ($nama) {
//     return "Menampilkan mahasiswa bernama $nama";
// });

// Route::get('/mahasiswa/{nim}/{nama}', function ($nim, $nama) {
//     return "Mahasiswa dengan NIM $nim bernama $nama";
// });

// Route::get('/mahasiswa/{nim}/{nama}', function ($a, $b) {
//     return "Mahasiswa dengan NIM $a bernama $b";
// });

// Route::get('/mahasiswa/{nim?}/{nama?}', function ($a = '001', $b = 'linds') {
//     return "Mahasiswa dengan NIM $a bernama $b";
// });

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

Route::get("user/{email}", function ($email) {
    return "Tampilkan user dengan email=$email";
})->where('email', '[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]+');

//Modul View
// Route::get('/mahasiswa', function () {
//     return view('jurusan.mahasiswa');
// });

// Route::get('/mahasiswa', function () {
//     return view('jurusan.mahasiswa', ["mhs1" => "Lukito Edi"]);
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = [
//         "mhs01" => "Lukito Edi",
//         "mhs02" => "Rudiyanto",
//         "mhs03" => "Kusumawardhani",
//         "mhs04" => "Agung Laksono",
//     ];
//     return view('jurusan.mahasiswa', $arrMahasiswa);
// });

// Route::get('/mahasiswa', function () {
//     $arrMahasiswa = [
//         "Lukito Edi",
//         "Rudiyanto",
//         "Kusumawardhani",
//         "Agung Laksono",
//     ];
//     return view('jurusan.mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('/mahasiswa/{nama}/{umur}/{asal?}', function ($nama, $umur, $asal = "Tidak diisi") {

//     return view('latihanRouteView', ["nama" => $nama, "umur" => $umur, "asal" => $asal]);
// })->where('umur', '[0-9]+');

Route::get('/blade', function () {
    $arr = [
        1,
        2,
        3,
        4,
        5,
        6,
        7
    ];
    return view('pengenalanBlade.pengulanganForeachBlade', ["arr" => $arr]);
});


//Modul Controller
// Route::get('/', [MahasiswaController::class, 'index']);
// Route::get('/mahasiswa', [MahasiswaController::class, 'tampil']);
// Route::get('/', [App\Http\Controllers\Admin\MahasiswaController::class, 'index']);
// Route::get('/mahasiswa', [MahasiswaController::class, 'tampil']);

Route::get('/mahasiswa',[MahasiswaController::class,'showMahasiswa']);
Route::get('/mahasiswa/sany',[MahasiswaController::class,'sanyAdikaPrayata']);
Route::get('/dosen',[DosenController::class,'showDosen']);
Route::get('/gallery',[GalleryController::class,'showGallery']);

//Modul tabel 1
Route::get('/',[MahasiswaController::class,'index']);
Route::get('/insert-sql',[MahasiswaController::class,'insertsql']);
Route::get('/insert-timestamp',[MahasiswaController::class,'insertTimestamp']);
Route::get('/insert-prepared',[MahasiswaController::class,'insertPrepared']);
Route::get('/insert-binding',[MahasiswaController::class,'insertBinding']);
Route::get('/update',[MahasiswaController::class,'update']);
Route::get('/delete',[MahasiswaController::class,'delete']);
Route::get('/select',[MahasiswaController::class,'select']);
Route::get('/select-tampil',[MahasiswaController::class,'selectTampil']);
Route::get('/select-view',[MahasiswaController::class,'selectView']);
Route::get('/select-where',[MahasiswaController::class,'selectWhere']);
Route::get('/statement',[MahasiswaController::class,'statement']);

Route::get('/insert',[MahasiswaController::class,'insert']);
Route::get('/insert-banyak',[MahasiswaController::class,'insertBanyak']);
Route::get('/update-or-insert',[MahasiswaController::class,'updateOrInsert']);
Route::get('/get',[MahasiswaController::class,'get']);
Route::get('/get-tampil',[MahasiswaController::class,'getTampil']);
Route::get('/get-view',[MahasiswaController::class,'getView']);
Route::get('/get-where',[MahasiswaController::class,'getWhere']);
Route::get('/take',[MahasiswaController::class,'take']);
Route::get('/first',[MahasiswaController::class,'first']);
Route::get('/find',[MahasiswaController::class,'find']);
Route::get('/raw',[MahasiswaController::class,'raw']);
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
?>