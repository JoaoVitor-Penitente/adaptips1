<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/movie.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Movies | Adapti</title>
</head>
<body>
    <div id="search">
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
            <form class="d-flex" action="{{ route('movie.index')}}" method="GET">
                @csrf
                <input type="text" id="search" name = "search" class="form-control" placeholder="pesquisar..">
                <button type="submit" class="btn btn-outline-success">buscar</button>
            </form>
        </nav>
    </div>
     
    <div id = "movie_container">
        @if ($search)
            <h2>buscando por: {{ $search }}</h2>
        @else
            <h2>Filmes Cadastrados</h2>
            <a class="btn btn-outline-info" href="{{ route('movie.create')}}">create</a>
        @endif
        
    @foreach ($movies as $movie)
        <h4>title: {{ $movie->title }} - country: {{ $movie->country->name}}</h4>
        <div><img src="{{ $movie->image }}"></div>
        <a class="btn btn-outline-primary" href="{{ route('movie.edit', $movie->id)}}">Editar filme</a>
        <form action="{{route('movie.destroy',$movie->id)}}" id="delete" method="POST">
            @csrf
            @method('DELETE')
            
            <button type ="subimit" class="btn btn-outline-danger" id= "deletar" onclick="alerta()">Deletar</button>
        </form>
    @endforeach
    @if(count($movies)== 0 && $search)
        <p>Não foi possível encontrar nenhum filme com: {{ $search}} ! <a class="btn btn-outline-info" href="{{ route('movie.index')}}">Ver Filmes Disponiveis</a></p>
    @elseif(count($movies) == 0)  
        <p>Não há filmes</p>  
    @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>