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

Route::get('/agen',[AGENController::class,"index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
});
