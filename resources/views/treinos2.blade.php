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
  
  <div id="filter-section">
    <a href="{{ route('agenda')}}">Agenda</a>
    <form id="filter-form">
      <label for="filter-category">Filtrar por categoria:</label>
      <select id="filter-category">
        <option value="">Todas</option>
        @foreach($categorias as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
        @endforeach  
      </select>
    </form>
    <a href="{{ route('treinos-cadastro')}}">Cadastro de Treinos</a>
  </div>

  <div id="workouts">   
    @foreach($treinos as $treino)
      <div class="workout" data-category-id="{{ $treino->categoria->id }}"> {{--mudar category pra categoria dps--}}
        <h2>{{ $treino->nome }}</h2>
        <img src="{{ asset($treino->caminho_imagem) }}" alt="{{ $treino->nome }}"> {{--public/storage/images/treinos...--}}
        <p>{{ $treino->descricao }}</p>
        <button class="show-more-button">Ver mais</button>
      {{--@if(Auth::check())-- Auth::user()->id == 2 funciona --}}
          <div class="extra-info">
            <p>{{ $treino->info_extra }}</p>
          </div>
          <button class="favorite-button">Adicionar aos favoritos</button>
        {{--@endif--}}
      </div>
    @endforeach    
  </div>  
</div>
  <script src="script.js"></script>
</body>

</html>

<script src="js/treinos.js"></script>