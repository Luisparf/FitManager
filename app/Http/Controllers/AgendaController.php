<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treino;
use App\Models\Agenda;
use App\Models\Dia;

class AgendaController extends Controller
{
    //fazer uma view pra mostras as agendas do usuário (substituir no index), outra pro cadastro de treino, otra pra agendar (pronta)
    public function index(){
        $treinos = Treino::all();
        $dias = Dia::all();
        return view('agenda', ['treinos' => $treinos, 'classe' => 'x', 'dias' => $dias]);
    }

    public function agendar(Request $request){

        $regras = [
            'dia' => 'required',
            'treino_id' => 'required',
            'series' => 'required|max:100',
            'repeticoes' => 'required|max:150'
            //'caminho_imagem' => 'required|image|mimes:jpeg,jpg,png'
        ];
        //mensagem específica ex: nome.required sobrepoe as gerais, ex: required
        $feedback = [
            'min' => 'O campo :attribute precisa ter no mínimo 3 caracteres',
            'max' => 'O campo :attribute deve ter no máximo 40 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];

        //unset($request["_token"]);

        $request->validate($regras, $feedback);
        $agenda = new Agenda();
        $agenda->dia_id = $request->input('dia');
        $agenda->treino_id = $request->input('treino_id');
        $agenda->series = $request->input('series');
        $agenda->repeticoes = $request->input('repeticoes');     
        $agenda->save();
        //return redirect()->route('agenda');
    }
}
