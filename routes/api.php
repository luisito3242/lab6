<?php

use App\Http\Controllers\CatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/cats', [CatController::class, 'index']);           
Route::get('/cats/{id}', [CatController::class, 'show']);       
Route::put('/cats/{id}', [CatController::class, 'update']);     
Route::delete('/cats/{id}', [CatController::class, 'destroy']); 


Route::get('/dogs', [DogController::class, 'index']);           
Route::get('/dogs/{id}', [DogController::class, 'show']);       
Route::put('/dogs/{id}', [DogController::class, 'update']);     
Route::delete('/dogs/{id}', [DogController::class, 'destroy']); 