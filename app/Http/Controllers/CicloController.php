<?php
    
namespace App\Http\Controllers;

session_start();



use Illuminate\Http\Request;

class CicloController extends Controller
{
    function index(){
        if(!exits($_SESSION['ciclos'])){
            $_SESSION['ciclos'] = [];
        }

        return view('index');
    }

    function crear(){
        return view('ciclos.nuevo');
    }

    function almacenar(){
        
    }
}
