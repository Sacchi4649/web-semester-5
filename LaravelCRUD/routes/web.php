<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/games",[GameController::class,'index'])->name('games.index');
Route::get("/games/create",[GameController::class,'create'])->name('games.create');
Route::post("/games/store",[GameController::class,'store'])->name('games.store');
Route::get("/games/{game}",[GameController::class,'show'])->name('games.show');
Route::get("/games/{game}/edit",[GameController::class,'edit'])->name('games.edit');
Route::put("/games/{game}",[GameController::class,'update'])->name('games.update');
Route::delete("/games/{game}",[GameController::class,'destroy'])->name('games.destroy');

Route::get('/daftar-matakuliah',[MatakuliahController::class,'daftarMatakuliah']);
Route::get('/tabel-matakuliah',[MatakuliahController::class,'tabelMatakuliah']);
Route::get('/detail-matakuliah',[MatakuliahController::class,'detailMatakuliah']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';