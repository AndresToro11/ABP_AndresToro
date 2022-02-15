<?php

namespace App\Http\Controllers;

use App\Models\Curs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $actiu = $request->input('actiu');
        if($actiu == 'on'){
            $cursos = Curs::where('actiu', '=', true)
                    ->orderBy('nom', 'desc')
                    ->paginate(6)
                    ->withQueryString();
        }
        else{
            $cursos = Curs::orderBy('nom', 'desc')
                            ->paginate(6);
        }

        return view ('cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = new Curs();

        //$curso->id = 'NULL';
        $curso->sigles = $request->input('siglas');
        $curso->nom = $request->input('nombre');
        $curso->cicles_id = $request->input('ciclo');

        $curso->actiu = ($request->input('activo') == 'activo');

        $curso->save();

        return redirect()->action([CursosController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show(Curs $cursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit(Curs $cur)
    {
        return view('cursos.editar', compact('cur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curs $cursos)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curs $cur)
    {
        var_dump('hola');
        $cur->delete();

        return redirect()->action([CursosController::class, 'index']);
    }
}
