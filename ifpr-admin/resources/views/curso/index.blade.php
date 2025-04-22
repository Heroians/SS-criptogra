@extends('default')

@section('content')
    <h1>Cursos</h1>
    <a href="{{ route('curso.create') }}">Criar novo curso</a>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Abreviatura</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->abreviatura }}</td>
                    <td>
                        <a href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
                        <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
