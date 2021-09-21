@extends('layouts.main')

@section('title','Movie | Edit')

@section('content')

<form class = "form-crud" id="form-crud" action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="edit-container">
        <div class="text-camp-crud">
            <label for="title">Título</label>
            <input class = "input-form-crud" type="text" name="title" id="title" value="{{ $movie->title}}" placeholder = "Digite o titulo" required>

            <label for="genre">Gênero</label>
            <input class = "input-form-crud" type="text" name="genre" id="genre" value="{{ $movie->genre}}" placeholder = "Digite o genero" required>

            <label for="release">Data de lançamento</label>
            <input class = "input-form-crud" type="date" name="release" id="release" value="{{ $movie->release}}" required>

            <label for="country">País</label>
            <input class = "input-form-crud" type="text" name="country" id="country" value ="{{ $movie->country->name }}" placeholder = "Digite o país" required>

            <label for="rating">Nota</label>
            <input class = "input-form-crud" type="number" step= 0.1  name="rating" id="rating" value="{{ $movie->rating}}" placeholder = "Digite a nota" required>

            <label for="synopsis">Sinopse</label>
            <textarea class = "input-form-crud create-area-crud" name="synopsis" id="synopsis" placeholder = "Digite a sinopse.." required>{{ $movie->synopsis}}</textarea>
        </div>
        <div class="imagem-edit">
            <label for="image">Imagem</label>
            <input class = "input-form-crud input-img-crud" type="file" name="image" id="image">
            <img src="{{ $movie->image}}" alt="capa do filme" class="preview-edit"> 
            <label for="image" class="button-select">Trocar imagem</label>
        </div>
    </div>   
</form>
<div class="edit-buttons">
    <button form="form-crud" class="button-select-crud" type="submit">Salvar alterações</button>
    <form action="{{route('movie.destroy',$movie->id)}}" id="delete2" method="POST">
        @csrf
        @method('DELETE')
        <button type ="subimit" class="button-select-crud" id= "deletar" onclick="alerta2()"alt="deletar">Apagar filme</button>
    </form>
    <a class = "button-select-crud"href="{{route('movie.index')}}">voltar</a>
</div>
<script>
    function alerta2(){
        let x = document.querySelector('#delete2')
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