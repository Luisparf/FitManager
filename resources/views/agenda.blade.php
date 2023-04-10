<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>
  <link rel="stylesheet" href= {{ asset('css/agenda.css') }}>  
</head>

<body>
    <h1>Minha Agenda</h1>
    <div class="links-container">
      <a class="link" href="{{ route('treinos')}}">Voltar</a>
      <a class="link" href="{{ route('agenda-cadastro')}}">Adicionar treino à sua agenda</a>
    </div>
    @foreach($dias as $dia)
      <h2 class="seta">{{ $dia->dia }}</h2>
      <div class="treinos-dia">
        @foreach($agendas as $agenda)
          @if($agenda->dia_id == $dia->id)
            <div class="treino">
              <h3>{{ $agenda->treino->nome }}</h3>
              <div class="series-repeticoes">
                <p>{{ $agenda->series}} SÉRIES de {{ $agenda->repeticoes}} REPETIÇÕES</p>
              </div>
              <button class="mostrar-mais">Ver mais detalhes</button>
              <br><br>
              <div class="info-extra">
                <img src="{{ asset($agenda->treino->caminho_imagem) }}" alt="{{ $agenda->treino->nome }}">
                <p>{{ $agenda->treino->descricao }}</p>
                <form action="{{ route('agenda-delete', ['id' => $agenda->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <br>
                  <button type="submit" class="botao-delete" onclick=" return confirm('Tem certeza de que deseja remover este treino de sua agenda?')">Remover da agenda</button>
                </form>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    @endforeach
  </body>

<script src="js/agenda.js"></script>