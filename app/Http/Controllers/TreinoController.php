<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treino;

class TreinoController extends Controller
{
    public function index(){
        return view('treinos');
    }

    public function inserir_treino(Request $request){
        $regras = [
            'nome' => 'required|min:3|max:40',
            'categoria' => 'required|min:4|max:40',
            'descricao' => 'required:100',
            'caminho_imagem' => 'required',
        ];
        //mensagem específica ex: nome.required sobrepoe as gerais, ex: required
        $feedback = [
            'min' => 'O campo :attribute precisa ter no mínimo 3 caracteres',
            'max' => 'O campo :attribute deve ter no máximo 40 caracteres',
            'descricao.max' => 'A mensagem deve ter no máximo 100caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);
        Treino::create($request->all());
        return redirect()->route('/');
    }
}
