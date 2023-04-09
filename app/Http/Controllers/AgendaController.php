<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Treino;
use App\Models\Agenda;
use App\Models\Dia;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function index(){
        $treinos = Treino::all();
        $dias = Dia::all();
        $agendas = Agenda::where('user_id', Auth::user()->id)->get();
        return view('agenda', ['treinos' => $treinos, 'dias' => $dias, 'agendas' => $agendas]);
    }

    public function cadastro(){
        $treinos = Treino::all();
        $dias = Dia::all();
        return view('agenda_cadastro', ['treinos' => $treinos, 'classe' => 'x', 'dias' => $dias]);
    }

    public function agendar(Request $request){
        $regras = [
            'dia' => 'required',
            'treino' => 'required',
            'series' => 'required|max:100',
            'repeticoes' => 'required|max:150'
        ];
        $feedback = [
            'min' => 'O campo :attribute precisa ter no mínimo 3 caracteres',
            'max' => 'O campo :attribute deve ter no máximo 40 caracteres',
            'required' => 'O campo :attribute deve ser preenchido'
        ];
        $request->validate($regras, $feedback);
        $agenda = new Agenda();
        $agenda->user_id = Auth::user()->id;
        $agenda->dia_id = $request->input('dia');
        $agenda->treino_id = $request->input('treino');
        $agenda->series = $request->input('series');
        $agenda->repeticoes = $request->input('repeticoes');     
        $agenda->save();
        return redirect()->route('agenda');
    }
        public function deletar_agenda($id) {
            Agenda::find($id)->delete();
            return redirect()->route('agenda');
        }
}
