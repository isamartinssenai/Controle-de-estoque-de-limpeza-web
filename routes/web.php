<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstoqueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastra_usuario_html']);
Route::get('/cadastro_estoque', [EstoqueController::class, 'cadastro_estoque_html']);

Route::get('/login', [LoginController::class, 'login_html']);

Route::get('/cadastro', [UsuarioController::class, 'cadastro_html']);
Route::get('/inicio', [UsuarioController::class, 'incio_html']);
Route::get('/produto', [EstoqueController::class, 'produto_html']);
