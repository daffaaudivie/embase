<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PETUGASController;
use App\Http\Controllers\AGENController;

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

Route::get('/data',[PETUGASController::class,"index"]);
Route::get('/data/create', [PETUGASController::class, 'create'])->name('data.create');
Route::get('/data/edit/{id}', [PETUGASController::class, 'edit'])->name('data.edit');
Route::put('/petugas/{id}', [PETUGASController::class, 'update'])->name('petugas.update');
Route::delete('/petugas/{id}', [PETUGASController::class, 'destroy'])->name('petugas.destroy');

Route::post('/petugas', [PETUGASController::class, 'store'])->name('petugas.store');
Route::get('/data', [PETUGASController::class, 'index'])->name('petugas.index');



Route::get('/agen',[AGENController::class,"index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
});


