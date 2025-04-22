<!-- resources/views/componente.blade.php -->
@extends('default')

@section('content')
    <h1>Componentes</h1>
    
    <!-- Lista de Componentes -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($componentes as $componente)
                <tr>
                    <td>{{ $componente->id }}</td>
                    <td>{{ $componente->nome }}</td>
                    <td>{{ $componente->curso->nome }}</td>
                    <td>
                        <a href="{{ route('componente.edit', $componente->id) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('componente.destroy', $componente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Botão para criar novo componente -->
    <a href="{{ route('componente.create') }}" class="btn btn-success">Novo Componente</a>
@endsection
