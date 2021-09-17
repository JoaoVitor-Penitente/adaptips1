@extends('layouts.main')

@section('title','Movie | Create')

@section('content')
    <form class = "form-create" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class = "create-container">
            <div class="text-camp">
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
            </div>
            

            <div class="imagem-create">
                <label for="image">imagem</label>
                <img id="preview" class="preview" src="{{ asset('assets/image/preview.svg')}}">
                <label for="image" class="button-select">Adicionar imagem</label>
                <input class = "input-form input-img" type="file" name="image" id="image" required>
                
            </div>
        </div>      
    </form>

    <div class ="create-buttons">
        <button form="form-create" class="button-form" type="submit">Criar Filme</button>
        <a class = "button-form"href="{{route('movie.index')}}">Voltar</a>
    </div>

    <script>
        const input = document.querySelector('#image')
        input.addEventListener('change',(e)=>{
            const t = e.target || window.event.srcElement
            const arq = t.files
            const ler = new FileReader()

            ler.onload = ()=>{
            document.querySelector('#preview').src = ler.result
            }

            ler.readAsDataURL(arq[0])
        })
    </script>
@endsection