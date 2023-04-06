{{-- $slot --}}
<form action={{ route('treinos') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    @if ($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif
    <br>
    <select name="categoria_id" class="{{ $classe }}">
        <option value="">Categoria</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}" {{ old('categoria_id') == $categoria->id ? 'selected' : '' }}>{{ $categoria->categoria }}</option>
        @endforeach
    </select>
    {{ $errors->has('categoria_id') ? $errors->first('categoria_id') : '' }}
    <br>
    <textarea name="descricao" class="{{ $classe }}">{{ (old('descricao') != '') ? old('Descricao') : 'Preencha aqui a descrição' }}</textarea>
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <br>
    <textarea name="info_extra" class="{{ $classe }}">{{ (old('info_extra') != '') ? old('info_extra') : 'Preencha aqui a informação extra' }}</textarea>
    {{ $errors->has('info_extra') ? $errors->first('info_extra') : '' }}
    <br>
    <input name="caminho_imagem" value="{{ old('caminho_imagem') }}" type="text" placeholder="Caminho da imagem" class="{{ $classe }}">
    {{ $errors->has('caminho_imagem') ? $errors->first('caminho_imagem') : '' }}
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
