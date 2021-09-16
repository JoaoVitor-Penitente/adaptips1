@extends('layouts.main')

@section('title','Movie | Create')

@section('content')
    <form class = "form-create"action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Título</label>
        <input class = "input-form" type="text" name="title" id="title" placeholder = "Digite o titulo" required>

        <label for="genre">Gênero</label>
        <input class = "input-form" type="text" name="genre" id="genre" placeholder = "Digite o genero" required>

        <label for="release">Data de lançamento</label>
        <input class = "input-form" type="date" name="release" id="release" required>

        <label for="country">País</label>
        <input class = "input-form" type="text" name="country" id="country" placeholder = "Digite o país">

        <label for="rating">Nota</label>
        <input class = "input-form" type="number" step= 0.1  name="rating" id="rating" placeholder = "Digite a nota" required>

        <label for="synopsis">Sinopse</label>
        <textarea class = "input-form create-area" name="synopsis" id="synopsis" placeholder = "Digite a sinopse.." required></textarea>

        <label for="image">Imagem</label>
        <input class = "input-form input-img" type="file" name="image" id="image" required>
        <div class ="button-form">
            <button type="submit" class="button-submit">Criar Filme</button>
            <a class = "button-back"href="{{route('movie.index')}}">Voltar</a>
        </div>
        
    </form>
    
@endsection