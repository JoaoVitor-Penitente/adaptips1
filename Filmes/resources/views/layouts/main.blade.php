<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/create.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/edit.css') }}" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Comfortaa:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
</head>
<body>
    <header class = "header-container container">
        <div class = "header-title">
            <i class="fas fa-film"></i>
            <h6>Adapti movies</h6>
        </div>
        <nav>
            <ul class = "nav-items">
                <li><a class="nav-buttons btn" href="{{ route('movie.create')}}"><i class="fas fa-file-video"></i>Adicionar Filmes</a></li>
                <li><a class="nav-buttons btn"  href="{{route('movie.index')}}"><i class="fas fa-home"></i>Inicio</a></li>
            </ul>
            
        </nav>
    </header>

    <main class = "main-container">
        @yield('content')
    </main>
    
    <footer class = "footer-container container">
        <h6>Desenvolvido com &hearts; 2021 Adapti-Soluções Web</h6>
        <div class="footer-icons">
            <a href="#" class="social-icons"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="social-icons"><i class="fab fa-instagram-square"></i></a>
            <a href="#" class="social-icons"><i class="fab fa-linkedin"></i></a>
        </div>
    </footer>
    
    <script src="assets/js/script.js"></script>
</body>
</html>