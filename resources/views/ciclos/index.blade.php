@extends('layouts.plantilla')

@section('titulo', 'Ciclos')

@section('contenido')
    @if (empty($ciclos))
        <div class="alert bg-primary text-white opacity-75 mt-3" role="">
            Aún no hay ciclos dados de alta.
        </div>

    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Siglas</th>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ciclos as $value)
                    <tr>
                        <td>{{$value->getId()}}</th>
                        <td>{{$value->getSiglas()}}</td>
                        <td>{{$value->getNombre()}}</td>
                        <td>
                            <form action="" method="get">
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i> Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif

        </tbody>
    </table>

    <button class="btn btn-primary position-absolute bottom-0 end-0 m-5">
        <a id="boton" class="text-white text-decoration-none" href="/ABP_AndresToro/public/nuevo-ciclo"><i class="fas fa-plus"></i> Nuevo ciclo</a>
    </button>

@endsection

<?php
    //{{ action([App\Http\Controllers\CiclosController::class, 'destroy']) }}
?>

