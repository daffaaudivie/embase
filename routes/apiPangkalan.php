<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PANGKALANController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("all_data", [PANGKALANController::class, "index"]);
Route::post("create_data", [PANGKALANController::class, "store"]);
Route::post("show_data", [PANGKALANController::class, "show"]);
Route::post("edit_data", [PANGKALANController::class, "edit"]);
Route::post("delete_data", [PANGKALANController::class, "destroy"]);
