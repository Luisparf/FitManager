<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Treinos</title>
  <link rel="stylesheet" href= {{ asset('css/treinos.css') }}>  
</head>

<body>
  <h1><b>Treinos disponíveis</b></h1>

  <form id="filter-form">
    <label for="filter-category">Filtrar por categoria:</label>
    <select id="filter-category">
      <option value="">Todas</option>
      <option value="favoritos">Favoritos</option>
      <option value="peito">Peito</option>
      <option value="costas">Costas</option>
      <option value="pernas">Pernas</option>
      <option value="ombros">Ombros</option>
      <option value="biceps">Bíceps</option>
      <option value="triceps">Tríceps</option>      
    </select>
  </form>

  <div id="workouts">
    <div class="workout" data-category="peito">
      <h2>Supino</h2>
      <img src="{{ asset('images/treinos/supino.png') }}" alt="Supino">
      <p>O supino é um excelente exercício para o desenvolvimento do peitoral. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>

    <div class="workout" data-category="costas">
      <h2>Remada baixa</h2>
      <img src="{{ asset('images/treinos/remada-baixa.png') }}" alt="Remada Baixa">
      <p>A remada baixa é um excelente exercício para o desenvolvimento das costas. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, sente-se no aparelho de remada e segure a barra com as palmas voltadas para baixo e os braços estendidos. Puxe a barra em direção ao seu abdômen, mantendo as costas retas. Em seguida, estenda os braços para retornar à posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>

    <div class="workout" data-category="pernas">
      <h2>Agachamento</h2>
      <img src="{{ asset('images/treinos/agachamento.png') }}" alt="Agachamento">
      <p>O agachamento é um excelente exercício para o desenvolvimento das pernas. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, fique em pé com os pés afastados na largura dos ombros e segure uma barra atrás do pescoço com as mãos afastadas na largura dos ombros. Agache-se, mantendo as costas retas e os joelhos apontados para a frente, até que suas coxas fiquem paralelas ao chão. Em seguida, levante-se lentamente até a posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>

    <div class="workout" data-category="biceps">
      <h2>Rosca direta</h2>
      <img src="{{ asset('images/treinos/rosca-direta.jpg') }}" alt="Rosca direta">
      <p>A rosca direta é um excelente exercício para o desenvolvimento dos bíceps. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, fique em pé com os pés afastados na largura dos ombros e segure uma barra com as mãos afastadas na largura dos ombros. Levante a barra com os cotovelos próximos ao corpo e os punhos virados para cima, até que ela chegue próximo ao peitoral. Em seguida, abaixe a barra lentamente até a posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>

    <div class="workout" data-category="triceps">
      <h2>Tríceps testa</h2>
      <img src="{{ asset('images/treinos/triceps-testa.png') }}" alt="Tríceps testa">
      <p>O tríceps testa é um excelente exercício para o desenvolvimento dos tríceps. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, deite-se em um banco e segure uma barra com as mãos afastadas na largura dos ombros. Posicione a barra acima da cabeça, com os cotovelos próximos à testa. Levante a barra até que seus braços estejam estendidos, mantendo os cotovelos próximos. Em seguida, abaixe a barra lentamente até a posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>
    <div class="workout" data-category="pernas">
      <h2>Panturrilha</h2>
      <img src="{{ asset('images/treinos/panturrilha.png') }}" alt="Panturrilha">
      <p>O exercício para panturrilha é importante para fortalecer essa região. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 15 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, fique em pé em um degrau ou plataforma com os pés na borda, deixando os calcanhares pendurados. Levante-se na ponta dos pés e segure por um segundo, em seguida, abaixe-se lentamente até que seus calcanhares fiquem abaixo da superfície do degrau.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>
    
    <div class="workout" data-category="ombros">
      <h2>Desenvolvimento de ombros</h2>
      <img src="{{ asset('images/treinos/desenvolvimento-ombros.png') }}" alt="Desenvolvimento de ombros">
      <p>O desenvolvimento de ombros é um excelente exercício para fortalecer essa região. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, sente-se em um banco com as costas retas e segure uma barra acima da cabeça com as mãos afastadas na largura dos o ombros. Levante a barra acima da cabeça até que os braços fiquem estendidos e, em seguida, abaixe a barra lentamente até a posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>
    
    <div class="workout" data-category="costas">
      <h2>Remada alta</h2>
      <img src="{{ asset('images/treinos/remada-alta.png') }}" alt="Remada alta">
      <p>A remada alta é um excelente exercício para o desenvolvimento das costas. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, fique em pé com as pernas afastadas na largura dos ombros e segure um halter em cada mão na frente do corpo. Puxe os halteres para cima até a altura do peito, mantendo os cotovelos próximos ao corpo. Em seguida, abaixe os halteres lentamente até a posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>
    
    <div class="workout" data-category="biceps">
      <h2>Rosca martelo</h2>
      <img src="{{ asset('images/treinos/rosca-martelo.png') }}" alt="Rosca martelo">
      <p>A rosca martelo é um excelente exercício para o desenvolvimento dos bíceps. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 10 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar este exercício, fique em pé com os pés afastados na largura dos ombros e segure um halter em cada mão ao lado do corpo com as palmas das mãos voltadas para as coxas. Levante os halteres em direção aos ombros, mantendo os cotovelos próximos ao corpo. Em seguida, abaixe os halteres lentamente até a posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
    </div>
    
    <div class="workout" data-category="triceps">
      <h2>Extensão de tríceps com halteres ou barras</h2>
      <img src="{{ asset('images/treinos/extensao-triceps.png') }}" alt="Extensão de tríceps com halteres ou barras">
      <p>A extensão de tríceps com halteres ou barras é um excelente exercício para o desenvolvimento dos tríceps. É importante manter a postura correta e usar o peso e usar o peso adequado para obter resultados efetivos e evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 12 repetições com 60 segundos de descanso entre as séries.</p>
        <p>Para realizar o exercício, deite-se em um banco e segure um halter em cada mão ou, uma barram com as palmas voltadas para dentro. Levante acima do peito, estendendo os braços. Em seguida, abaixe os halteres ou a barra em direção à cabeça, dobrando os cotovelos, e volte à posição inicial. Repita o movimento por várias repetições, conforme o seu nível de treino.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>
      </div>
    <div class="workout" data-category="abdominais">
      <h2>Abdominal reto</h2>
      <img src="{{ asset('images/treinos/abdominal-reto.png') }}" alt="Abdominal reto">
      <p>O abdominal reto é um excelente exercício para o desenvolvimento dos músculos do abdômen. É importante manter a postura correta e usar o peso adequado para evitar lesões.</p>
      <button class="show-more-button">Ver mais</button>
      <div class="extra-info">
        <p>Realize 3 séries de 15 repetições com 30 segundos de descanso entre as séries.</p>
        <p>Deite-se de costas com as pernas dobradas e os pés apoiados no chão. Coloque as mãos atrás da cabeça ou cruzadas no peito e, em seguida, levante o tronco em direção aos joelhos. Expire enquanto sobe e inspire enquanto retorna à posição inicial.</p>
      </div>
      <button class="favorite-button">Adicionar aos favoritos</button>  
    </div>
  </div>  
</div>


  <script src="script.js"></script>
</body>

</html>

<script src="js/treinos.js"></script>