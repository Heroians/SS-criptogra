@extends('default')

@section('content')
    <h1>Criar Novo Componente</h1>

    <form action="{{ route('curso.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="carga_horaria">Carga Horária:</label>
        <input type="text" id="carga_horaria" name="carga_horaria" required>

        <label for="curso_id">Curso:</label>
        <select id="curso_id" name="curso_id">
            @foreach ($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
            @endforeach
        </select>

        <button type="submit">Salvar</button>
    </form>
@endsection
