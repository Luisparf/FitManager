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
            'user_id' => 1,
            'categoria_id' => 2,
            'descricao' => 'O supino é um excelente exercício para o desenvolvimento do peitoral. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.',
            'caminho_imagem' => 'storage/images/treinos/supino.png'
        ]);
        Treino::create([
            'nome' => 'Remada baixa',
            'user_id' => 1,
            'categoria_id' => 3,
            'descricao' => 'A remada baixa é um excelente exercício para o desenvolvimento das costas. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries. Para realizar este exercício, sente-se no aparelho de remada e segure a barra com as palmas voltadas para baixo e os braços estendidos. Puxe a barra em direção ao seu abdômen, mantendo as costas retas. Em seguida, estenda os braços para retornar à posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/remada-baixa.png'
        ]);
        Treino::create([
            'nome' => 'Agachamento',
            'user_id' => 1,
            'categoria_id' => 4,
            'descricao' => 'O agachamento é um excelente exercício para o desenvolvimento das pernas. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Para realizar este exercício, fique em pé com os pés afastados na largura dos ombros e segure uma barra atrás do pescoço com as mãos afastadas na largura dos ombros. Agache-se, mantendo as costas retas e os joelhos apontados para a frente, até que suas coxas fiquem paralelas ao chão. Em seguida, levante-se lentamente até a posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/agachamento.png'
        ]);
        Treino::create([
            'nome' => 'Rosca direta',
            'user_id' => 1,
            'categoria_id' => 6,
            'descricao' => 'A rosca direta é um excelente exercício para o desenvolvimento dos bíceps. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries. Para realizar este exercício, fique em pé com os pés afastados na largura dos ombros e segure uma barra com as mãos afastadas na largura dos ombros. Levante a barra com os cotovelos próximos ao corpo e os punhos virados para cima, até que ela chegue próximo ao peitoral. Em seguida, abaixe a barra lentamente até a posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/rosca-direta.jpg'
        ]);
        Treino::create([
            'nome' => 'Tríceps testa',
            'user_id' => 1,
            'categoria_id' => 7,
            'descricao' => 'O tríceps testa é um excelente exercício para o desenvolvimento dos tríceps. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries. Para realizar este exercício, deite-se em um banco e segure uma barra com as mãos afastadas na largura dos ombros. Posicione a barra acima da cabeça, com os cotovelos próximos à testa. Levante a barra até que seus braços estejam estendidos, mantendo os cotovelos próximos. Em seguida, abaixe a barra lentamente até a posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/panturrilha.png'
        ]);
        Treino::create([
            'nome' => 'Desenvolvimento de ombros',
            'user_id' => 1,
            'categoria_id' => 5,
            'descricao' => 'O desenvolvimento de ombros é um excelente exercício para fortalecer essa região. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries. Para realizar este exercício, fique em pé com as pernas afastadas na largura dos ombros e segure um halter em cada mão na frente do corpo. Puxe os halteres para cima até a altura do peito, mantendo os cotovelos próximos ao corpo. Em seguida, abaixe os halteres lentamente até a posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/desenvolvimento-ombros.png'
        ]);
        Treino::create([
            'nome' => 'Remada alta',
            'user_id' => 1,
            'categoria_id' => 3,
            'descricao' => 'A remada alta é um excelente exercício para o desenvolvimento das costas. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries. Para realizar este exercício, fique em pé com as pernas afastadas na largura dos ombros e segure um halter em cada mão na frente do corpo. Puxe os halteres para cima até a altura do peito, mantendo os cotovelos próximos ao corpo. Em seguida, abaixe os halteres lentamente até a posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/remada-alta.png'
        ]);
        Treino::create([
            'nome' => 'Rosca martelo',
            'user_id' => 1,
            'categoria_id' => 6,
            'descricao' => 'A rosca martelo é um excelente exercício para o desenvolvimento dos bíceps. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries. Para realizar este exercício, fique em pé com os pés afastados na largura dos ombros e segure um halter em cada mão ao lado do corpo com as palmas das mãos voltadas para as coxas. Levante os halteres em direção aos ombros, mantendo os cotovelos próximos ao corpo. Em seguida, abaixe os halteres lentamente até a posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/rosca-martelo.png'
        ]);
        Treino::create([
            'nome' => 'Extensão de tríceps com halteres ou barras',
            'user_id' => 1,
            'categoria_id' => 7,
            'descricao' => 'A extensão de tríceps com halteres ou barras é um excelente exercício para o desenvolvimento dos tríceps. É importante manter a postura correta e usar o peso e usar o peso adequado para obter resultados efetivos e evitar lesões.',
            'info_extra' => 'Realize 3 séries de 12 repetições com 60 segundos de descanso entre as séries. Para realizar o exercício, deite-se em um banco e segure um halter em cada mão ou, uma barram com as palmas voltadas para dentro. Levante acima do peito, estendendo os braços. Em seguida, abaixe os halteres ou a barra em direção à cabeça, dobrando os cotovelos, e volte à posição inicial. Repita o movimento por várias repetições, conforme o seu nível de treino.',
            'caminho_imagem' => 'storage/images/treinos/extensao-triceps.png'
        ]);
        Treino::create([
            'nome' => 'Abdominal reto',
            'user_id' => 1,
            'categoria_id' => 8,
            'descricao' => 'O abdominal reto é um excelente exercício para o desenvolvimento dos músculos do abdômen. É importante manter a postura correta e usar o peso adequado para evitar lesões.',
            'info_extra' => 'Realize 3 séries de 15 repetições com 30 segundos de descanso entre as séries. Deite-se de costas com as pernas dobradas e os pés apoiados no chão. Coloque as mãos atrás da cabeça ou cruzadas no peito e, em seguida, levante o tronco em direção aos joelhos. Expire enquanto sobe e inspire enquanto retorna à posição inicial.',
            'caminho_imagem' => 'storage/images/treinos/abdominal-reto.png'
        ]);
    }
}
