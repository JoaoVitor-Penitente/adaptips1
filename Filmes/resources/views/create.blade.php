<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Filme</title>
</head>
<body>
    <a href="{{route('movie.index')}}">voltar</a>
    <form action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <label for="title">Titulo</label>
                <input type="text" name="title" id="title"></div>
            <div>
                <label for="genre">Genero</label>
                <input type="text" name="genre" id="genre"></div>
            <div>
                <label for="release">Lançamento</label>
                <input type="date" name="release" id="release"></div>
            <div>
                <label for="country">País</label>
                <input type="text" name="country" id="country"></div>
            <div>
                <label for="rating">Nota</label>
                <input type="number" step= 0.1  name="rating" id="rating"></div>    
            <div>
                <label for="synopsis">Sinopse</label>
                <textarea name="synopsis" id="synopsis"></textarea></div>    
            <div>
                <label for="image">imagem</label>
                <input type="file" name="image" id="image"></div>
        </div>
        <button type="submit">criar</button>
    </form>
</body>
</html>