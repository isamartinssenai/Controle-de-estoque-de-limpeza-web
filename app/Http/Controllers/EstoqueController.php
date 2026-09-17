<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    // Abre a página de cadastro de estoque
    public function cadastro_estoque_html(Request $request){
        return view('cadastro_estoque');
    }

    public function produto_html(Request $request){
        $produtos = Estoque::all();
        return view('produtos', compact('produtos'));
    }

    // Cadastra o produto no estoque
    public function cadastra_estoque(Request $request)
    {
        $request->validate([
            'codigo_produto' => 'required',
            'nome_produto' => 'required',
            'categoria' => 'required',
            'marca' => 'nullable',
            'unidade' => 'required',
            'data_validade' => 'required',
            'fornecedor' => 'nullable',
            'observacao' => 'nullable',
        ]);

        $produto = new Estoque();

        // Verifica se o código já existe
        if ($produto->where('codigo_produto', '=', $request->codigo_produto)->exists()) {
            return response()->json([
                'erro' => 's',
                'message' => 'Código do produto já cadastrado'
            ], 200);
        }

        try {

            $produto->codigo_produto = $request->codigo_produto;
            $produto->nome_produto = $request->nome_produto;
            $produto->categoria = $request->categoria;
            $produto->marca = $request->marca;
            $produto->unidade = $request->unidade;
            $produto->data_validade = $request->data_validade;
            $produto->fornecedor = $request->fornecedor;
            $produto->observacao = $request->observacao;

            $produto->save();

            return response()->json([
                'erro' => 'n',
                'message' => 'Produto cadastrado com sucesso'
            ], 200);

        } catch (\Exception $e) {

            return response()->json([
                'erro' => 's',
                'message' => 'Erro ao cadastrar produto'
            ], 200);
        }
    }
}