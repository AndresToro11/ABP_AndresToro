<?php

use App\Clases\Curs;
use App\Clases\Cicle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;

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


//---------------------- Index -----------------------------------------------------------

Route::get ('/', function(){
    return view('index');
});

 //--------------------- Ciclos ---------------------------------------------------------

Route::get('/ciclos', [App\Http\Controllers\CicleController::class, 'index']);

Route::post('/nuevo-ciclo', [App\Http\Controllers\CicleController::class, 'almacenar']);

Route::get('/nuevo-ciclo', [App\Http\Controllers\CicleController::class, 'crear']);

Route::post('/ciclos/{id}', [App\Http\Controllers\CicleController::class, 'destruir']);

//----------------------- Cursos --------------------------------------------------------

Route::resource('curs', CursosController::class);

//Route::get('/cursos', [App\Http\Controllers\CursosController::class, 'index']);

//------------------------------ Modulos --------------------------------------------------



//-------------------------------------------------------------------------------------------






