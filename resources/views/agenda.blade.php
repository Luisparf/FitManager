{{-- $slot --}}
<form action={{ route('agenda') }} method="post" enctype="multipart/form-data">
    @csrf
    <select name="dia" class="{{ $classe }}">
        <option value="">Dia da semana</option>
        @foreach($dias as $dia)
            <option value="{{ $dia->id }}" {{ old('dia') == $dia->id ? 'selected' : '' }}>{{ $dia->dia }}</option>
        @endforeach
    </select>
    {{ $errors->has('dia') ? $errors->first('dia') : '' }}
    <br>
    {{--puxar o treino->nome (em um select igual acima, pro usuário selecionar mostrando o nome, mas dai salva o id do treino--}}
    <select name="treino_id" class="{{ $classe }}">
        <option value="">Selecione o treino</option>
        @foreach($treinos as $treino)
            <option value="{{ $treino->id }}" {{ old('treino_id') == $treino->id ? 'selected' : '' }}>{{ $treino->nome }}</option>
        @endforeach
    </select>
    {{ $errors->has('treino_id') ? $errors->first('treino_id') : '' }}
    <br>
    <input name="series" value="{{ old('series') }}" type="text" placeholder="Número de Séries" class="{{ $classe }}">
    @if ($errors->has('series'))
        {{ $errors->first('series') }}
    @endif
    <br>
    <input name="repeticoes" value="{{ old('repeticoes') }}" type="text" placeholder="Número de Repetições" class="{{ $classe }}">
    @if ($errors->has('repeticoes'))
        {{ $errors->first('repeticoes') }}
    @endif
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>

@if($errors->any())
    <div style="position:absolute; top:0px; width:100%; background:red">

        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br >
        @endforeach

    </div>
@endif
