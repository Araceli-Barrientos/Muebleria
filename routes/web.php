<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', [ProductoController::class, 'index']);
Route::get('/colecciones', [ProductoController::class, 'colecciones']);
Route::get('/pedido', [ProductoController::class, 'pedido']);
Route::post('/pedido', [ProductoController::class, 'enviarPedido']);