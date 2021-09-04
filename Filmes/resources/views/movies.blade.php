<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head>
<body>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <img src="{{ $movie->image }}" alt="imagem">
    @endforeach
</body>
</html>