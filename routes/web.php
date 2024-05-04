<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class,'index']) ;
Route::get('create', [TodoController::class, 'create']);
Route::get('details', [TodoController::class, 'details']);
Route::get('edit', [TodoController::class, 'edit']);
Route::get('update/{id}/{name}', [TodoController::class, 'update']);
Route::get('delete/{todo}', [TodoController::class, 'delete']);
Route::post('store-data', [TodoController::class, 'store']);


