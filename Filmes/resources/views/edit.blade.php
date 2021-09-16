@extends('layouts.main')

@section('title','Movie | Edit')

@section('content')
    <form class = "form-crud" id="form-crud" action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <label for="title">Título</label>
        <input class = "input-form" type="text" name="title" id="title" value="{{ $movie->title}}" placeholder = "Digite o titulo" required>

        <label for="genre">Gênero</label>
        <input class = "input-form" type="text" name="genre" id="genre" value="{{ $movie->genre}}" placeholder = "Digite o genero" required>

        <label for="release">Data de lançamento</label>
        <input class = "input-form" type="date" name="release" id="release" value="{{ $movie->release}}" required>

        <label for="country">País</label>
        <input class = "input-form" type="text" name="country" id="country" value ="{{ $movie->country->name }}" placeholder = "Digite o país" required>

        <label for="rating">Nota</label>
        <input class = "input-form" type="number" step= 0.1  name="rating" id="rating" value="{{ $movie->rating}}" placeholder = "Digite a nota" required>

        <label for="synopsis">Sinopse</label>
        <textarea class = "input-form create-area" name="synopsis" id="synopsis" placeholder = "Digite a sinopse.." required>{{ $movie->synopsis}}</textarea>

        <label for="image">Imagem</label>
        <input class = "input-form input-img" type="file" name="image" id="image">
        <div class="capa-edit">
            <img src="{{ $movie->image }}" alt="capa do filme">
        </div>
            
    </form>
    <div class="button-container">
        <button form="form-crud" class="button-submit" type="submit">Editar Filme</button>
        <form action="{{route('movie.destroy',$movie->id)}}" id="delete" method="POST">
            @csrf
            @method('DELETE')
            <button type ="subimit" class="button-delete" id= "deletar" onclick="alerta()"alt="deletar">Apagar filme</button>
        </form>
        <a class = "button-back"href="{{route('movie.index')}}">voltar</a>
    </div>
    
@endsection