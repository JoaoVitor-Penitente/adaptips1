@extends('layouts.main')

@section('title','Movies | Adapti')

@section('content')
    <div class="search-container">
        <div class="search">
            @if ($search)
                <h2>buscando por: {{ $search }}</h2>
            @else
                <h1>Filmes</h1>
            @endif
            <form class="search-form" action="{{route('movie.index')}}" method="GET">
                @csrf
                <input type="text" id="search" name = "search" class="search-input" placeholder="pesquisar..">
                <button type="submit" class="button-search btn"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class = "movie-container">
        @foreach ($movies as $movie)
            <div class="movie-card">
                <div class = "info-top">
                    <h2>{{$movie->title}}</h2>
                </div>
                <div class = "info-container">
                    <img class = "capa"src="{{$movie->image}}">
                    <div class = "info-text">
                        <p><strong>Gênero:</strong>{{$movie->genre}}</p>
                        <p><strong>País:</strong> {{$movie->country->name}}</p>
                        <p><strong>lançamento:</strong> {{$movie->release}}</p>
                        <p><strong>Nota:</strong> {{$movie->rating}}</p>
                        <p><strong>Sinopse:</strong>{{$movie->synopsis}}</p>
                    </div>
                    <button>aqui<br></button>
                    <a href="">aqui</a>
                </div>
                
                <div class = "main-button-container">
                        <a class="button-edit none" href="{{ route('movie.edit', $movie->id)}}"><i class="far fa-edit"></i></a>
                        <form action="{{route('movie.destroy',$movie->id)}}" id="delete1" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type ="subimit" class="main-form-delete none" id= "deletar" onclick="alerta()"alt="deletar"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
            </div>
        @endforeach
    </div>
    @if(count($movies)== 0 && $search)
        <div class="sem-pesquisa">
            <h2>:(</h2>
            <p>Não foi possível encontrar nenhum filme com: {{ $search}} !</p>
            <a class="sem-pesquisa-button" href="{{ route('movie.create')}}">Adicione esse filme no catálogo</a>
        </div>
    @elseif(count($movies) == 0)  
        <div class ="sem-filmes">
            <p >Não há filmes cadastrados</p>  
        </div>
    @endif
    <script>
        function alerta(){
            let x = document.querySelector('#delete1')
            let confirm = window.confirm('Você realmente deseja deletar o filme?')
    
            if (confirm){
                alert('Filme excluido com sucesso')
            }
            else{
                x.addEventListener('submit', (event) => event.preventDefault())
                document.location.reload(true)
            }   
        }
    </script>
@endsection