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
      <a class="link" href="{{ route('agenda-cadastro')}}">Adicionar treino</a>
    </div>
    @foreach($dias as $dia)
      <h2 class="arrow">{{ $dia->dia }}</h2>
      <div class="day-workouts">
        @foreach($agendas as $agenda)
          @if($agenda->dia_id == $dia->id)
            <div class="workout">
              <h3>{{ $agenda->treino->nome }}</h3>
              <div class="series-repetitions">
                <p>{{ $agenda->series}} SÉRIES de {{ $agenda->repeticoes}} REPETIÇÕES</p>
              </div>
              <button class="show-more-button">Ver mais detalhes</button>
              <div class="extra-info">
                <img src="{{ asset($agenda->treino->caminho_imagem) }}" alt="{{ $agenda->treino->nome }}">
                <p>{{ $agenda->treino->descricao }}</p>
              </div>
              <form action="{{ route('agenda-delete', ['id' => $agenda->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <br>
                <button type="submit" class="delete-button" onclick=" return confirm('Tem certeza de que deseja remover este treino de sua agenda?')">Remover</button>
              </form>
            </div>
          @endif
        @endforeach
      </div>
    @endforeach
  </body>

<script src="js/agenda.js"></script>