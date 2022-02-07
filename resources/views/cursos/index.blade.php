@extends('layouts.plantilla')

@section('titulo', 'Cursos')

@section('contenido')
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
            @foreach ($cursos as $value)
                <tr>
                    <td>{{$value->getId()}}</th>
                    <td>{{$value->getSiglas()}}</td>
                    <td>{{$value->getNombre()}}</td>
                    <td>{{$value->getSiglasCiclo()}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
