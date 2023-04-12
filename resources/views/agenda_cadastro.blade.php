<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href= {{ asset('css/cadastro.css') }}>  
</head>

<form action={{ route('agenda') }} method="post" enctype="multipart/form-data">
    @csrf
    <a class="link" href="{{ route('agenda')}}">Voltar</a>
    <br>
    <select name="dia">
        <option value="">Dia da semana</option>
        @foreach($dias as $dia)
            <option value="{{ $dia->id }}" {{ old('dia') == $dia->id ? 'selected' : '' }}>{{ $dia->dia }}</option>
        @endforeach
    </select>
    {{ $errors->has('dia') ? $errors->first('dia') : '' }}
    <br>
    <select name="treino">
        <option value="">Selecione o treino</option>
        @foreach($treinos as $treino)
            <option value="{{ $treino->id }}" {{ old('treino') == $treino->id ? 'selected' : '' }}>{{ $treino->nome }}</option>
        @endforeach
    </select>
    {{ $errors->has('treino') ? $errors->first('treino') : '' }}
    <br>
    <input name="series" value="{{ old('series') }}" type="text" placeholder="Número de Séries">
    @if ($errors->has('series'))
        {{ $errors->first('series') }}
    @endif
    <br>
    <input name="repeticoes" value="{{ old('repeticoes') }}" type="text" placeholder="Número de Repetições">
    @if ($errors->has('repeticoes'))
        {{ $errors->first('repeticoes') }}
    @endif
    <br>
    <button type="submit">AGENDAR</button>
</form>