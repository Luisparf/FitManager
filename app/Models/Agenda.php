<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'dia',
        'treino_id',
        'series',
        'repeticoes'
    ];

    public function dia(){
        return $this->belongsTo(Dia::class, 'dia_id');
    }
    public function treino(){
        return $this->belongsTo(Treino::class, 'treino_id');
    }
}
