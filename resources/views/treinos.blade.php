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
  <h1><b>FitManager</b></h1>
  <div id="filtros">
    <a class = "link" href="{{ route('dashboard')}}">Voltar</a>    
    <a class = "link" href="{{ route('agenda')}}">Agenda</a>
    <form id="form-filtro">
      <label for="filtro-categoria">Filtrar por categoria:</label>
      <select id="filtro-categoria">
        <option value="">Todos</option>
        @foreach($categorias as $categoria)
          <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
        @endforeach  
      </select>
    </form>
    <button id="mostrar-favoritos">Favoritos</button>
    <a class = "link" href="{{ route('treinos-cadastro')}}">Novos Treinos</a>
  </div>

  <div id="treinos">   
    @foreach($treinos as $treino)
      <div class="treino" data-id="{{ $treino->id }}" data-category-id="{{ $treino->categoria->id }}">
        <h2>{{ $treino->nome }}</h2>
        <img src="{{ asset($treino->caminho_imagem) }}" alt="{{ $treino->nome }}">
        <div class="descricao">
          <h3 style = "text-align: justify">{{ $treino->descricao }}</h3>
        </div>
        <br>
        <div class="botoes">
          <button class="mostrar-mais">Mais detalhes</button>
          <div class="info-extra">
            <p>{{ $treino->info_extra }}</p>
          </div>
          <form action="{{ route('favoritos', $treino->id) }}" method="POST">
            @csrf
            <br>
            <button type="submit" class="botao-favoritos">Adicionar aos favoritos</button>
          </form>
        </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('#mostrar-favoritos').on('click', function() {
  var favoritoIds = @json($favoritos->pluck('id'));
  
  // Verificar se os treinos favoritos já estão sendo exibidos
  var mostrandoFavoritos = $('.treino').filter(function() {
    return !favoritoIds.includes($(this).data('id'));
  }).is(':hidden');
  
  if (mostrandoFavoritos) {
    $('.treino').show();
  } else {
    $('.treino').filter(function() {
      return !favoritoIds.includes($(this).data('id'));
    }).hide();
  }
});
</script>

<script>
  $('.treino').each(function() {
    var favoritoIds = @json($favoritos->pluck('id'));
    var treinoId = $(this).data('id');
    if (favoritoIds.includes(treinoId)) {
      $(this).find('.botao-favoritos').text('Remover dos favoritos');
    }
  });</script>