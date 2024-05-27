<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Lista de películas estreno 2024</h1>

   <!--breeze  trae funcion que se llama auth -->
   <!-- Si tengo sesion activa mandeme el panel de control   dashboard viene de web -->
      <!-- Si no estoy autenticado mandame al login -->
   @auth
       <a href="{{url('dashboard')}}">Dashboard</a>
   @else
       <a href="{{url('login')}}">Login</a>
    @endauth

    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{url('movie', $movie->id)}}">{{$movie->title}}</a>
           </li>
        @endforeach
    </ul>
</body>
</html>
