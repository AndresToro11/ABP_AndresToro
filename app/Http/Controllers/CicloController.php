<?php

namespace App\Http\Controllers;

session_start();

use App\Clases\Ciclo;
use Illuminate\Http\Request;

/*class CicloController extends Controller
{
    public function index(){
        if(!session()->has('ciclos')){
            session(['ciclos' => []]);
        }

        return view('ciclos.index');
    }

    public function crear(){
        return view('ciclos.nuevo');
    }

    public function almacenar(Request $request){
        $ciclos = session('ciclos');

        $id = $request->input('identificador');
        $siglas = $request->input('siglas');
        $nombre = $request->input('nombre');

        $ciclo = new Ciclo($id, $siglas, $nombre);
        array_push($ciclos, $ciclo);

        session(['ciclos' => $ciclos]);

        return view('ciclos.index');
    }

    public function destruir($id){
        $ciclos = session('ciclos');

        $i = 0;
        $encontrado = false;
        while($i < count($ciclos) && $encontrado == false){
            if($ciclos[$i]->getId() == $id){
                unset($ciclos[$i]);
                $encontrado = true;
            }
            else{
                $i++;
            }
        }

        session(['ciclos' => $ciclos]);
        return view('ciclos.index');
        //session()->forget('ciclos');
    }
}*/
