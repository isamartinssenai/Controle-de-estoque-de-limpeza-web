<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstoqueController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cadastra_usuario', [UsuarioController::class, 'cadastra_usuario']);
Route::post('/cadastra_estoque', [EstoqueController::class, 'cadastra_estoque']);
Route::post('/login', [LoginController::class, 'login_api']);