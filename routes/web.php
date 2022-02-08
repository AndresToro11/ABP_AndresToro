<?php

use App\Clases\Curso;
use App\Clases\Ciclo;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get ('/', function(){
    return view('index');
});

Route::get('/ciclos', [App\Http\Controllers\CicloController::class, 'index']);

Route::post('/nuevo-ciclo', [App\Http\Controllers\CicloController::class, 'almacenar']);

Route::get('/nuevo-ciclo', [App\Http\Controllers\CicloController::class, 'crear']);

Route::post('/ciclos/{id}', [App\Http\Controllers\CicloController::class, 'destruir']);

/*Route::get('/ciclos', function () {
    $ciclos = [];
    $ciclo = new Ciclo(1, "DAW", "Desarrollo de aplicaciones web");
    array_push($ciclos, $ciclo);
    $ciclo = new Ciclo(2, "DAM", "Desarrollo de aplicaciones multiplataforma");
    array_push($ciclos, $ciclo);
    $datos['ciclos'] = $ciclos;
    return view('ciclos.index', $datos);
});*/

Route::get('/cursos', function(){
    $cursos = [];
    $curso = new Curso(1, "DAW", "Desarrollo de aplicaciones web de primero mañana A", "DAW");
    array_push($cursos, $curso);

    $curso = new Curso(2, "DAM", "Desarrollo de aplicaciones web de segundo mañana A", "DAW");
    array_push($cursos, $curso);

    $curso = new Curso(3, "DAM", "Desarrollo de aplicaciones web de segundo mañana B", "DAW");
    array_push($cursos, $curso);

    $datos['cursos'] = $cursos;
    return view('cursos.index', $datos);
});





