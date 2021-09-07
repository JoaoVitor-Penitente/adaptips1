<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head>
<body>
    <a href="{{ route('movie.create')}}">create</a>
    @foreach ($movies as $movie)
        <h4>title: {{ $movie->title }} - country: {{ $movie->country->name}}</h4>
        <div><img src="{{ $movie->image }}"></div>
        <a href="{{ route('movie.edit', $movie->id)}}">editar filme</a>
    @endforeach
</body>
</html>