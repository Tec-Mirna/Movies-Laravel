<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// importacion del controlador
use App\Http\Controllers\MoviesController;


Route::get('/', [MoviesController::class, 'index']);
Route::get('/movie/{movie}', [MoviesController::class, 'movie']);

/* Crear */
//Route::post()
/* Eliminar */
//Route::delete()
/* Editar */
//Route::put()

/* Hacemos referecia a Resource */
/* Artisan ya trae todo para que pueda hacer un crud  excepto la de mostrar ya que arriba está hecho*/
Route::Resource('/movies', MoviesController::class)->except(['show']);

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


