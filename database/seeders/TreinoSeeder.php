<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Treino;

class TreinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Treino::create([
            'nome' => 'Supino',
            'categoria_id' => 2,
            'descricao' => 'O supino é um excelente exercício para o desenvolvimento do peitoral. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.',
            'caminho_imagem' => 'supino.png'
        ]);
        Treino::create([
            'nome' => 'Remada baixa',
            'categoria_id' => 3,
            'descricao' => 'A remada baixa é um excelente exercício para o desenvolvimento das costas. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries. Para realizar este exercício, sente-se no aparelho de remada e segure a barra com as palmas voltadas para baixo e os braços estendidos. Puxe a barra em direção ao seu abdômen, mantendo as costas retas. Em seguida, estenda os braços para retornar à posição inicial.',
            'caminho_imagem' => 'remada-baixa.png'
        ]);
    }
}
