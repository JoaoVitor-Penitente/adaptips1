<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/pc.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/movie.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/create.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <title>@yield('title')</title>
</head>
<body>
    
    <header class = "header-container container">
        <h6>Adapti movies</h6>
        <nav>
            <ul class = "nav-items">
                <li><a class="button-create" href="{{ route('movie.create')}}">Adicionar Filmes</a></li>
                <li><a class="button-create button-inicial" href="{{route('movie.index')}}">Inicio</a></li>
            </ul>
            
        </nav>
    </header>
    <main class = "main-container">
        @yield('content')
    </main>
    

    <footer class = "footer-container container">
        <h6>Desenvolvido com &hearts; 2021 Adapti-Soluções Web</h6>
        <div class="footer-icons">
            <a href="facebook.com">
                <img src="{{asset('assets/image/facebook.svg')}}" alt="facebook">
            </a>
            <a href="instagram.com">
                <img src="{{asset('assets/image/instagram.svg')}}" alt="instagram">
            </a>
            <a href="linkedin.com">
                <img src="{{asset('assets/image/linkedin.svg')}}" alt="linkedin">
            </a>
        </div>
    </footer>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>
</body>
</html>