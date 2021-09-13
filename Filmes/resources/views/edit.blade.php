@extends('layouts.main')

@section('title','Movie Edit')

@section('content')
<main>
    
<a href="{{route('movie.index')}}">voltar</a>
<form action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <section class ="edit-container">
        <div class = "titulo">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" value="{{ $movie->title}}">
        </div>
        <div class = "genero">
            <label for="genre">Genero</label>
            <input type="text" name="genre" id="genre" value="{{ $movie->genre}}">
        </div>
        <div class = "data-lancamento">
            <label for="release">Data de Lançamento</label>
            <input type="date" name="release" id="release" value="{{ $movie->release}}">
        </div>
        <div class = "pais">
            <label for="country">País</label>
            <input type="text" name="country" id="country" value ="{{ $movie->country->name }}">   
        </div>

        <div class = "nota">
            <label for="rating" ></label>
            <input type="number" step= 0.1  name="rating" id="rating" value="{{ $movie->rating}}">
        </div>    
        <div class = "descrição">
            <label for="synopsis" ></label>
            <textarea name="synopsis" id="synopsis">{{ $movie->synopsis}}</textarea>
        </div>    
        <div class = "imagem">
            <label for="image" ></label>
            <input type="file" name="image" id="image">
        </div>
    </section>
    <button type="submit">Editar</button>
    <form action="{{route('movie.destroy',$movie->id)}}" id="delete" method="POST">
        @csrf
        @method('DELETE')
        <button type ="subimit" class="button-submit" id= "deletar" onclick="alerta()"alt="deletar">Apagar filme</button>
    </form>
</form>
</main>
@endsection