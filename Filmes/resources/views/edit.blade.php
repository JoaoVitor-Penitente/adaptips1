<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/create.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Editar Filme</title>
</head>
<body>
    <a href="{{route('movie.index')}}">voltar</a>
    <form action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div>
            <div>
                <h2>Nome do filme</h2>
                <label for="title" class="sr-only"></label>
                <input type="text" name="title" id="title" value="{{ $movie->title}}"></div>
            <div>
                <h2>Gênero</h2>
                <label for="genre" class="sr-only"></label>
                <input type="text" name="genre" id="genre" value="{{ $movie->genre}}"></div>
            <div>
                <h2>Lançamento</h2>
                <label for="release" class="sr-only"></label>
                <input type="date" name="release" id="release" value="{{ $movie->release}}"></div>
            <div>
                <h2>País</h2>
                <label for="country"class="sr-only"></label>
                <input type="text" name="country" id="country" value ="{{ $movie->country->name }}"></div>
            <div>
                <h2>Nota</h2>
                <label for="rating" class="sr-only"></label>
                <input type="number" step= 0.1  name="rating" id="rating" value="{{ $movie->rating}}"></div>    
            <div>
                <h2>Sinopse do filme</h2>
                <label for="synopsis" class="sr-only"></label>
                <textarea name="synopsis" id="synopsis">{{ $movie->synopsis}}</textarea></div>    
            <div>
                <h2>Selecionar imagem</h2>
                <label for="image" class="sr-only"></label>
                <input type="file" name="image" id="image"></div>
        </div>
        <button type="submit">Editar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>