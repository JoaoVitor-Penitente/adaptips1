<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
    <title>Movies | Adapti</title>
</head>
<body>
    <div id="search">
        <form action="{{ route('movie.index')}}" method="GET">
            @csrf
            <input type="text" id="search" name = "search" class="form-control" placeholder="pesquisar..">
            <button type="submit">buscar</button>
        </form>
    </div>
    <div id = "movie_container">
        @if ($search)
            <h2>buscando por: {{ $search }}</h2>
        @else
            <h2>Filmes Cadastrados</h2>
            <a href="{{ route('movie.create')}}">create</a>
        @endif
        
    @foreach ($movies as $movie)
        <h4>title: {{ $movie->title }} - country: {{ $movie->country->name}}</h4>
        <div><img src="{{ $movie->image }}"></div>
        <a href="{{ route('movie.edit', $movie->id)}}">Editar filme</a>
        <form action="{{route('movie.destroy',$movie->id)}}" id="delete" method="POST">
            @csrf
            @method('DELETE')
            <button type ="subimit" id= "deletar" onclick="alerta()">Deletar</button>
        </form>
    @endforeach
    @if(count($movies)== 0 && $search)
        <p>Não foi possível encontrar nenhum filme com: {{ $search}} ! <a href="{{ route('movie.index')}}">Ver Filmes Disponiveis</a></p>
    @elseif(count($movies) == 0)  
        <p>Não há filmes</p>  
    @endif
    </div>
    <script src="js/script.js"></script>
</body>
</html>