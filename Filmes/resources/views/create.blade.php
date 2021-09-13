@extends('layouts.main')

@section('title','Movie Edit')

@section('content')

<main>
    <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class = "create">
            <div class = "titulo">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" placeholder = "Digite o titulo">
            </div>
            <div class = "genero">
                <label for="genre">Gênero</label>
                <input type="text" name="genre" id="genre" placeholder = "Digite o genero">
            </div>
            <div class = "lançamento">
                <label for="release">Data de lançamento</label>
                <input type="date" name="release" id="release">
            </div>
            <div class = "pais">
                <label for="country">País</label>
                <input type="text" name="country" id="country" placeholder = "Digite o país">
            </div>
            <div class = "nota">
                <label for="rating">Nota</label>
                <input type="number" step= 0.1  name="rating" id="rating" placeholder = "Digite a nota">
            </div>    
            <div class = "sinopse">
                <label for="synopsis">Sinopse</label>
                <textarea name="synopsis" id="synopsis" placeholder = "Digite a sinopse.."></textarea>
            </div>    
            <div class = "imagem">
                <label for="image">Imagem</label>
                <input type="file" name="image" id="image">
            </div>
        </section>
        <button type="submit" class="button-submit">Criar Filme</button>
        <a href="{{route('movie.index')}}">voltar</a>
        
    </form>
</main>
@endsection