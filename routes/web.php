<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstoqueController;
use App\Http\Middleware\LogadoMiddleware;
use App\Http\Controllers\ComunicacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro_usuario', [UsuarioController::class, 'cadastra_usuario_html']); 
Route::get('/cadastro_estoque', [EstoqueController::class, 'cadastro_estoque_html']);
Route::get('/login', [LoginController::class, 'login_html']);
Route::get('/inicio', [UsuarioController::class, 'incio_html'])->middleware(LogadoMiddleware::class);
Route::get('/produto', [EstoqueController::class, 'produto_html'])->middleware(LogadoMiddleware::class);

Route::get('/luzes', [ComunicacaoController::class, 'luzes_html']);
Route::get('/nfc', [ComunicacaoController::class, 'nfc_html']);