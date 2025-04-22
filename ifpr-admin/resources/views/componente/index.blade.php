@extends('default')

@section('title', 'Componentes')

@section('content')
    <h1>Lista de Componentes</h1>
    <a href="{{ route('componente.create') }}">Novo Componente</a>
    <ul>
        @foreach($componentes as $componente)
            <li>
                {{ $componente->nome }} - {{ $componente->carga_horaria }} 
                <a href="{{ route('componente.edit', $componente->id) }}">Editar</a>
                <form action="{{ route('componente.destroy', $componente->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
