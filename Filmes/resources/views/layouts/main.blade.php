<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/global.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/movie.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/create.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <title>@yield('title')</title>
</head>
<body>
    
    <header class = "header">
        <nav>
            <h1>João Vitor Penitente</h1>
            <a class="button-create" href="{{ route('movie.create')}}">Adicionar Filmes</a>
            <a class="button-back" href="{{route('movie.index')}}">Inicio</a>
        </nav>
    </header>

    @yield('content')

    <footer class = "footer">
        <h2>Desenvolvido com &hearts; 2021 Adapti-Soluções Web</h2>
        <a href="facebook.com">
        <img src="{{asset('assets/image/facebook.svg')}}" alt="facebook">
        </a>
        <a href="instagram.com">
        <img src="{{asset('assets/image/instagram.svg')}}" alt="instagram">
        </a>
        <a href="linkedin.com">
        <img src="{{asset('assets/image/linkedin.svg')}}" alt="linkedin">
        </a>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>