<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class,'index']) ;
Route::get('details', [TodoController::class, 'details']);
Route::get('update/{id}/{name}', [TodoController::class, 'update']);
Route::get('delete/{todo}', [TodoController::class, 'delete']);
Route::post('store-data', [TodoController::class, 'store']);


