<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarvillaController;

Route::get('/', [CarvillaController::class, 'index']);

Route::get('/create', [CarvillaController::class, 'create']);

Route::post('/', [CarvillaController::class, 'store']);

Route::get('/{carid}/show', [CarvillaController::class, 'show']);

Route::get('/{carid}', [CarvillaController::class, 'edit']);

Route::put('/{carid}', [CarvillaController::class, 'update']);

Route::delete('/{carid}', [CarvillaController::class, 'destroy']);