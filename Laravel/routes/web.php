<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
//     return view('welcome');
// });

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