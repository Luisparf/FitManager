<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $fillable = [
        'nome',
        'categoria_id',
        'descricao',
        'info_extra',
        'caminho_imagem'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    use HasFactory;
}
