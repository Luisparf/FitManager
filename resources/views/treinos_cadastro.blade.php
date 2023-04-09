<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo treino</title>
    <link rel="stylesheet" href= {{ asset('css/cadastro.css') }}>  
  </head>

<div id = "form-container">
    <form action={{ route('treinos') }} method="post" enctype="multipart/form-data">
        @csrf
        <a class="link" href="{{ route('treinos')}}">Voltar</a>
        <br>
        <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome">
        @if ($errors->has('nome'))
            {{ $errors->first('nome') }}
        @endif
        <br>
        <select name="categoria_id">
            <option value="">Categoria</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        {{ $errors->has('categoria_id') ? $errors->first('categoria_id') : '' }}
        <br>
        <textarea name="descricao">{{ (old('descricao') != '') ? old('descricao') : 'Preencha aqui a descrição' }}</textarea>
        {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
        <br>
        <textarea name="info_extra">{{ (old('info_extra') != '') ? old('info_extra') : 'Preencha aqui a informação extra' }}</textarea>
        {{ $errors->has('info_extra') ? $errors->first('info_extra') : '' }}
        <br>
        <input name="caminho_imagem" value="{{ old('caminho_imagem') }}" type="file" placeholder="Upload da imagem">
        {{ $errors->has('caminho_imagem') ? $errors->first('caminho_imagem') : '' }}
        <br>
        <button type="submit">ENVIAR</button>
    </form>
</div>