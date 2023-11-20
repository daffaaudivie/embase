<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PETUGASController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("all_data", [PETUGASController::class, "index"]);
Route::post("create_data", [PETUGASController::class, "store"]);
Route::post("show_data", [PETUGASController::class, "show"]);
Route::post("edit_data", [PETUGASController::class, "edit"]);
Route::post("delete_data", [PETUGASController::class, "destroy"]);
