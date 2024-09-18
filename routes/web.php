<?php
use App\Http\Controllers\HandphoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





// Rute untuk menampilkan daftar handphone
Route::get('/handphones', [HandphoneController::class, 'index'])->name('handphones.index');

// Rute untuk menampilkan formulir tambah handphone
Route::get('/handphones/create', [HandphoneController::class, 'create'])->name('handphones.create');

// Rute untuk menyimpan handphone baru
Route::post('/handphones', [HandphoneController::class, 'store'])->name('handphones.store');

// Rute untuk menampilkan formulir edit handphone
Route::get('/handphones/{id}/edit', [HandphoneController::class, 'edit'])->name('handphones.edit');

// Rute untuk memperbarui handphone
Route::put('/handphones/{id}', [HandphoneController::class, 'update'])->name('handphones.update');

// Rute untuk menghapus handphone
Route::delete('/handphones/{id}', [HandphoneController::class, 'destroy'])->name('handphones.destroy');




