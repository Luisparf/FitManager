<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Treinos</title>
  <link rel="stylesheet" href= {{ asset('css/treinos.css') }}>  
</head>

<body>
  @if (session('success'))
  <script>
      alert('{{ session('success') }}');
  </script>
  @endif
  <h1><b>Treinos disponíveis</b></h1>
  
  <div id="filtros">
    <a class = "link" href="{{ route('agenda')}}">Agenda</a>
    <form id="form-filtro">
      <label for="filtro-categoria">Filtrar por categoria:</label>
      <select id="filtro-categoria">
        <option value="">Todas</option>
        @foreach($categorias as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
        @endforeach  
      </select>
    </form>
    <a class = "link" href="{{ route('treinos-cadastro')}}">Novos Treinos</a>
  </div>

  <div id="treinos">   
    @foreach($treinos as $treino)
      <div class="treino" data-category-id="{{ $treino->categoria->id }}"> {{--mudar category pra categoria dps--}}
        <h2>{{ $treino->nome }}</h2>
        <img src="{{ asset($treino->caminho_imagem) }}" alt="{{ $treino->nome }}"> {{--public/storage/images/treinos...--}}
        <p>{{ $treino->descricao }}</p>
        <button class="mostrar-mais">Mais detalhes</button>
        <div class="info-extra">
          <p>{{ $treino->info_extra }}</p>
        </div>
        <form action="{{ route('favoritos', $treino->id) }}" method="POST">
          @csrf
          <br>
          <button type="submit" class="botao-favoritos">Adicionar aos favoritos</button>
        </form>
        @if(Auth::user()->id == $treino->user_id)
          <form action = "{{ route ('treinos-delete', $treino->id)}}" method = "POST">
            @csrf
            @method('DELETE')
            <br>
            <button type="submit" class="botao-delete" onclick="return confirm('Tem certeza de que deseja excluir este treino?')">Excluir</button>
          </form>
        @endif
      </div>
    @endforeach    
  </div>  
</div>
</body>

</html>

<script src="js/treinos.js"></script>