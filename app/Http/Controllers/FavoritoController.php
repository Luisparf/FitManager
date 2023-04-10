<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorito;

class FavoritoController extends Controller
{
    public function favoritar($id){
        $user = Auth::user();
        $favorito = Favorito::where('user_id', $user->id)->where('treino_id', $id)->first();
        if($favorito){
            $favorito->delete();
            return redirect()->back()->with('success', 'Treino removido dos favoritos!');
        }else{
            $favorito = new Favorito();
            $favorito->user_id = $user->id;
            $favorito->treino_id = $id;
            $favorito->save();
            return redirect()->back()->with('success', 'Treino adicionado aos favoritos!');
        }
    }
}
