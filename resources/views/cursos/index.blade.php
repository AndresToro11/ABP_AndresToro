@extends('layouts.plantilla')

@section('titulo', 'Cursos')

@section('contenido')
    @if (empty(session('ciclos')))
        <div class="alert bg-primary text-white opacity-75 mt-3" role="">
            Aún no hay cursos dados de alta.
        </div>
    @else
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Siglas</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ciclo</th>
                </tr>
            </thead>
            <tbody>
                @endif
            </tbody>
        </table>
@endsection

<?php
            /*@foreach ($cursos as $value)
                <tr>
                    <td>{{$value->getId()}}</th>
                    <td>{{$value->getSiglas()}}</td>
                    <td>{{$value->getNombre()}}</td>
                    <td>{{$value->getSiglasCiclo()}}</td>
                </tr>
            @endforeach*/
?>
