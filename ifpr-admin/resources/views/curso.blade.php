<!-- resources/views/curso.blade.php -->
@extends('default')

@section('content')
    <h1>Cursos</h1>
    
    <!-- Lista de Cursos -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>
                        <a href="{{ route('curso.edit', $curso->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('curso.destroy', $curso->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Botão para criar novo curso -->
    <a href="{{ route('curso.create') }}" class="btn btn-success">Novo Curso</a>
@endsection
