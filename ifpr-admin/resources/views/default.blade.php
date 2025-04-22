<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Administração')</title>
</head>
<body>
    <header>
        <!-- Cabeçalho padrão -->
        <nav>
            <ul>
                <li><a href="{{ route('curso.index') }}">Cursos</a></li>
                <li><a href="{{ route('componente.index') }}">Componentes</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Rodapé padrão -->
    </footer>
</body>
</html>
