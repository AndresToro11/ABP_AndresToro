<?php

use App\Clases\Curs;
use App\Clases\Cicle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\CicleController;

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

 Route::resource('cicle', CicleController::class);

//----------------------- Cursos --------------------------------------------------------

Route::resource('curs', CursosController::class);


//------------------------------ Modulos --------------------------------------------------



//-------------------------------------------------------------------------------------------






