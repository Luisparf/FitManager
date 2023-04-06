<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treino;
use App\Models\Categoria;

class TreinoController extends Controller
{
    public function index(){
        $treinos = Treino::all();
        $categorias = Categoria::all();
        return view('treinos2',['treinos' => $treinos,'categorias' => $categorias]); //treinos2
    }

    public function cadastro(){
        $treinos = Treino::all();
        $categorias = Categoria::all();
        return view('treinos_cadastro',['treinos' => $treinos,'categorias' => $categorias,'classe' => 'x']);
    }

    public function inserir_treino(Request $request){
        $regras = [
            'nome' => 'required|min:3|max:40',
            'categoria_id' => 'required',
            'descricao' => 'min:3|max:200',
            'info_extra' => 'max:500',
            'caminho_imagem' => 'required'
        ];
        //mensagem específica ex: nome.required sobrepoe as gerais, ex: required
        $feedback = [
            'min' => 'O campo :attribute precisa ter no mínimo 3 caracteres',
            'max' => 'O campo :attribute deve ter no máximo 40 caracteres',
            'descricao.max' => 'A mensagem deve ter no máximo 100caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        //unset($request["_token"]);

        $request->validate($regras, $feedback);
        $treino = new Treino();
        $treino->nome = $request->input('nome');
        $treino->categoria_id = $request->input('categoria_id');
        $treino->descricao = $request->input('descricao');
        $treino->info_extra = $request->input('info_extra');
        $treino->caminho_imagem = $request->input('caminho_imagem');
        $treino->save();
        //Treino::create($request->all());
        return redirect()->route('treinos');
    }
}
