<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get("/siswas", [siswacontroller::class,'index'])->name('siswas.index');
Route::get('/siswas/tambah', [siswacontroller::class, 'tambah'])->name('siswas.tambah');
Route::post('/siswas', [siswacontroller::class, 'simpan'])->name('siswas.store');
Route::get('/siswas/{id}/edit', [siswacontroller::class, 'edit'])->name('siswas.edit');
Route::put('/siswas/{id}', [siswacontroller::class, 'update'])->name('siswas.update');
Route::delete('/siswas/{id}', [siswacontroller::class, 'destroy'])->name('siswas.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
