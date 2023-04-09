<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treino;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TreinoController extends Controller
{
    public function index(){
        $treinos = Treino::all();
        $categorias = Categoria::all();
        return view('treinos',['treinos' => $treinos,'categorias' => $categorias]);
    }

    public function cadastro(){
        $treinos = Treino::all();
        $categorias = Categoria::all();
        return view('treinos_cadastro',['treinos' => $treinos,'categorias' => $categorias]);
    }

    public function inserir_treino(Request $request){
        $regras = [
            'nome' => 'required|min:3|max:40',
            'categoria_id' => 'required',
            'descricao' => 'required|min:3|max:200',
            'info_extra' => 'max:500',
            'caminho_imagem' => 'required|image|mimes:jpeg,jpg,png'
        ];
        $feedback = [
            'min' => 'O campo :attribute precisa ter no mínimo 3 caracteres',
            'max' => 'O campo :attribute deve ter no máximo 40 caracteres',
            'descricao.max' => 'A descrição deve ter no máximo 200 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        $request->validate($regras, $feedback);
        $treino = new Treino();
        $treino->nome = $request->input('nome');
        $treino->user_id = Auth::user()->id;
        $treino->categoria_id = $request->input('categoria_id');
        $treino->descricao = $request->input('descricao');
        $treino->info_extra = $request->input('info_extra');

        $imagem = $request->file('caminho_imagem');
        $caminho = $imagem->store('public/images/treinos');
        $treino->caminho_imagem = str_replace('public/', 'storage/', $caminho);
        //$treino->caminho_imagem = $caminho;
        //foi preciso utilizar php artisan storage:link pra criar um link pra pasta storage no diretório public       
        $treino->save();
        return redirect()->route('treinos')->with('success', 'Treino criado com sucesso!');
    }

    public function deletar_treino($id) {
        $treino = Treino::find($id);
        if (Auth::user()->id == $treino->user_id) {
            Storage::delete(str_replace('storage/', 'public/', $treino->caminho_imagem));
            $treino->delete();
            return redirect()->route('treinos')->with('success', 'Treino deletado com sucesso');
        } else {
            return redirect()->route('treinos')->with('error', 'Você não tem permissão para deletar este treino');
        }
    }
}
