<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <h1>{{$movie->title}}</h1>
    <p>{{$movie->director}}</p>

    <!-- SI NO EXISTE COMPAÑIA POR MUESTRA ACNE POR DEFECTO -->
    <h2>{{$movie->company ?? 'ACNE' }}</h2>
</body>
</html>
