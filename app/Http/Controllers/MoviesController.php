<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class MoviesController extends Controller
{
    public function index() {
      // ELOQUENT similar a una consulta en sql
       $movies = Movies::get();
        return view('movies.index', compact('movies')); 

    /* hacemos referencia a la vista */
       /*  return view('movies.index'); */
    }

    //retorna la vista movie  recibe el parámetro del id
    public function movie(Movies $movie){
        //findOrFail Buscar algo dependiendo del parametro
        $movie = Movies::findOrFail($movie->id); // buscar por id, titulo, etc
        return view('movie', ['movie' => $movie]);
    }

    /* ELIMINAR */
    public function destroy($id){
       Movies::destroy($id); /* Destruir la pelicula */
       return back(); /* back destruir y volver */
    }

    /* CREAR */
    public function create(){
        return view('movies.create');
    }

    /* Información que va cuando mando algo */
    public function store(Request $request){
       $movie = new Movies();
       $movie->title = $request->title;
       $movie->director = $request->director;
       $movie->image = $request->image;
       $movie->genre = $request->genre;
       $movie->description = $request->description;
       $movie->save();
       return redirect()->route('movies.index');
    }

    /* EDITAR */
    public function edit(Movies $movie){
        return view('movies.edit', compact('movie'));
    }  /* Compact y movie para traer los datos de la película */

    /* me trae información, del formulario hora, fecha, de donde Request */
      /* Inf de bd          inf del form */
    public function update(Request $request, Movies $movie){
        $movie->title = $request->title;  
        $movie->director = $request->director;
        $movie->image = $request->image;
        $movie->genre = $request->genre;
        $movie->description = $request->description;
        $movie->save(); 
        return redirect()->route('movies.index');
    } /* Sobreescribe  */


    /* Tema de api */
    public function allMoviesApi(){
        $movies = Movies::all(); /* Select * from movies */
        return response()->json($movies);
    }
}
