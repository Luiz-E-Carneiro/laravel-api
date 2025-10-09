<?php

use App\Models\Tarefa;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ItemController;

Route::get('/items', [ItemController::class, 'index']);
Route::post('/items', [ItemController::class, 'store']);
