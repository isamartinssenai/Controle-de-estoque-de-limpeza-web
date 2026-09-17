<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function cadastra_usuario_html(Request $request){
        return view('cadastro_usuario');
    }

    public function cadastro_html(Request $request){
        return view('cadastro');
    }


    public function incio_html(Request $request){
        return view('inicio');
    }

    public function cadastra_usuario(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required',
            'senha' => 'required|string|min:6',
            'data_nascimento' => 'required',
            'cpf' => 'required|string|max:11',
        ]);

        $usuario = new Usuario();

        if($usuario->where('email','=', $request->email)->exists()){
            return response()->json(['erro' => 's', 'message' => 'Email já cadastrado'], 200);
        }

        try{
            $usuario->nome = $request->nome;
            $usuario->email = $request->email;
            $usuario->senha = md5($request->senha);
            $usuario->data_nascimento = $request->data_nascimento;
            $usuario->cpf = $request->cpf;

            $usuario->save();

            return response()->json(['erro' => 'n', 'message' => 'Usuário cadastrado com sucesso'], 200);
        } catch (\Exception $e) {
            return response()->json(['erro' => 's', 'message' => 'Erro ao cadastrar usuário'], 200);
        }
    }
}
