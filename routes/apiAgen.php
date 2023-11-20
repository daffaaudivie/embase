<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AGENController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("all_data", [AGENController::class, "index"]);
Route::post("create_data", [AGENController::class, "store"]);
Route::post("show_data", [AGENController::class, "show"]);
Route::post("edit_data", [AGENController::class, "edit"]);
Route::post("delete_data", [AGENController::class, "destroy"]);
