<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PETUGASController;
use App\Http\Controllers\AGENController;
use App\Http\Controllers\PANGKALANController;
use App\Http\Controllers\TRANSAKSIController;
use App\Http\Controllers\PEMBAYARANController;

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

Route::get('/pangkalan',[PANGKALANController::class,"index"]);
Route::get('/pangkalan/create', [PANGKALANController::class, 'create'])->name('pangkalan.create');
Route::get('/pangkalan/edit/{id}', [PANGKALANController::class, 'edit'])->name('pangkalan.edit');
Route::put('/pangkalan/{id}', [PANGKALANController::class, 'update'])->name('pangkalan.update');
Route::delete('/pangkalan/{id}', [PANGKALANController::class, 'destroy'])->name('pangkalan.destroy');
Route::post('/pangkalan', [PANGKALANController::class, 'store'])->name('pangkalan.store');
Route::get('/pangkalan', [PANGKALANController::class, 'index'])->name('pangkalan.index');

Route::get('/transaksi',[TRANSAKSIController::class,"index"]);
Route::get('/transaksi/create', [TRANSAKSIController::class, 'create'])->name('transaksi.create');
Route::get('/transaksi/edit/{id}', [TRANSAKSIController::class, 'edit'])->name('transaksi.edit');
Route::put('/transaksi/{id}', [TRANSAKSIController::class, 'update'])->name('transaksi.update');
Route::delete('/transaksi/{id}', [TRANSAKSIController::class, 'destroy'])->name('transaksi.destroy');
Route::post('/transaksi', [TRANSAKSIController::class, 'store'])->name('transaksi.store');
Route::get('/transaksi', [TRANSAKSIController::class, 'index'])->name('transaksi.index');

Route::get('/pembayaran',[PEMBAYARANController::class,"index"]);
Route::get('/pembayaran/create', [PEMBAYARANController::class, 'create'])->name('pembayaran.create');
Route::get('/pembayaran/edit/{id}', [PEMBAYARANController::class, 'edit'])->name('pembayaran.edit');
Route::put('/pembayaran/{id}', [PEMBAYARANController::class, 'update'])->name('pembayaran.update');
Route::delete('/pembayaran/{id}', [PEMBAYARANController::class, 'destroy'])->name('pembayaran.destroy');
Route::post('/pembayaran', [PEMBAYARANController::class, 'store'])->name('pembayaran.store');
Route::get('/pembayaran', [PEMBAYARANController::class, 'index'])->name('pembayaran.index');
Route::patch('/updateStatus/{id}', [PEMBAYARANController::class, 'updateStatus'])->name('updateStatus');
Route::get('/pembayaran/filter', [PEMBAYARANController::class, 'filterPembayaran'])->name('filterPembayaran');

Route::get('/pengiriman', [TRANSAKSIController::class, 'pengiriman']);
Route::get('/transaksi/pengiriman', [TRANSAKSIController::class, 'pengiriman'])
    ->name('transaksi.pengiriman');

Route::patch('/pengiriman/updateStatusPengiriman/{id}', [TRANSAKSIController::class, 'updateStatusPengiriman'])
    ->name('pengiriman.updateStatusPengiriman');

// ...






Route::get('/agen',[AGENController::class,"index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
});


