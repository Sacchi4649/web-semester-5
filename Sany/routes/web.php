<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JajananController;    

Route::get("/jajanan",[JajananController::class,'index'])->name('jajanan.index');
Route::get("/jajanan/create",[JajananController::class,'create'])->name('jajanan.create');
Route::post("/jajanan/store",[JajananController::class,'store'])->name('jajanan.store');
Route::get("/jajanan/mass-assignment",[JajananController::class,"massAssignment5Data"]);
Route::delete("/jajanan/{jajanan}",[JajananController::class,'destroy'])->name('jajanan.destroy');
Route::get("/jajanan/{jajanan}/edit",[JajananController::class,'edit'])->name('jajanan.edit');
Route::put("/jajanan/{jajanan}",[JajananController::class,'update'])->name('jajanan.update');


Route::get('/', function () {
    return view('welcome');
});
