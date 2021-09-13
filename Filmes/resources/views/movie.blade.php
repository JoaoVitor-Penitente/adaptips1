@extends('layouts.main')

@section('title','Movies | Adapti')

@section('content')
<main>
    <div class="search">
        <form class="d-flex" action="{{ route('movie.index')}}" method="GET">
            @csrf
            <input type="text" id="search" name = "search" class="form-control" placeholder="pesquisar..">
            <button type="submit" class="button-submit">buscar</button>
        </form>
    </div>

    <section class = "movie_container">
    @if ($search)
        <h2>buscando por: {{ $search }}</h2>
    @else
        <h2>Filmes</h2>
    @endif

    @foreach ($movies as $movie)
    <h4>title: {{ $movie->title }} - country: {{ $movie->country->name}}</h4>

    <div>
        <img src="{{$movie->image}}">
    </div>

    <a class="button-edit" href="{{ route('movie.edit', $movie->id)}}"><img src="{{ asset('assets/image/edit.svg') }}" alt="editar"></a>
    <form action="{{route('movie.destroy',$movie->id)}}" id="delete" method="POST">
        @csrf
        @method('DELETE')
        
        <button type ="subimit" class="button-submit" id= "deletar" onclick="alerta()"><img src="{{ asset('assets/image/excluir.svg') }}" alt="deletar"></button>
    </form>
    @endforeach

    @if(count($movies)== 0 && $search)
    <p>Não foi possível encontrar nenhum filme com: {{ $search}} ! <a class="button-back" href="{{ route('movie.index')}}">Ver Filmes Disponiveis</a></p>
    @elseif(count($movies) == 0)  
    <p>Não há filmes</p>  
    @endif

    </section>
</main>

@endsection