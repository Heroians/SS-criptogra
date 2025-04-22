@extends('default')

@section('content')
    <h1>Criar Novo Curso</h1>

    <form action="{{ route('curso.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="abreviatura">Abreviatura:</label>
        <input type="text" id="abreviatura" name="abreviatura" required>

        <label for="tempo">Tempo:</label>
        <input type="text" id="tempo" name="tempo" required>

        <label for="nivel_id">Nível:</label>
        <select id="nivel_id" name="nivel_id">
            @foreach ($nivels as $nivel)
                <option value="{{ $nivel->id }}">{{ $nivel->nome }}</option>
            @endforeach
        </select>

        <label for="eixo_id">Eixo:</label>
        <select id="eixo_id" name="eixo_id">
            @foreach ($eixos as $eixo)
                <option value="{{ $eixo->id }}">{{ $eixo->nome }}</option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection
