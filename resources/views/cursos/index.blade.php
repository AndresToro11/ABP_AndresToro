@extends('layouts.plantilla')

@section('titulo', 'Cursos')

@section('contenido')
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">
                Buscar
            </h5>
            <form action="{{ action([App\Http\Controllers\CursosController::class, 'index'])}}">
            @csrf
                <div class="row">

                    <div class="col-1">
                        <label for="cicles">Cicle</label>
                    </div>

                    <div class="col-9">
                        <select class="form-select" aria-label="Default select example" name="cicle">
                            <option value="" disabled selected>Tots els cicles</option>

                            @foreach($cicles as $cicle)
                                <option value="{{ $cicle->id }}">  {{ $cicle->sigles }} </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-1">
                        <input class="form-check-input mt-2" type="checkbox" name="actiu" id="actiu">
                        <label class="form-check-label mt-1" for="actiu">Actiu</label>
                    </div>

                    <div class="col-1">
                        <button class="btn btn-secondary d-flex" type="submit"><i class="fas fa-search mt-1"></i> Buscar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
    @if(!empty($cursos))
        <div class="card mt-4">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sigles</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Actiu</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{ $curso->sigles }}</td>
                            <td>{{ $curso->nom }}</td>
                            <td>
                                @if($curso->actiu == 1)
                                    <input class="form-check-input" type="checkbox" name="" id="" checked disabled>

                                @else
                                    <input class="form-check-input" type="checkbox" name="" id="" disabled>
                                @endif
                            </td>
                            <td >
                                <form action="{{ action([App\Http\Controllers\CursosController::class, 'edit'], ['cur' => $curso->id]) }}">
                                    @csrf
                                    <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-edit"></i> Editar
                                    </button>
                                    <button class="btn btn-danger ms-1" type="button" id="borrarBoton" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-sigles="{{ $curso->sigles }}"
                                    data-action="{{ action([App\Http\Controllers\CursosController::class, 'destroy'], ['cur' => $curso->id]) }}">
                                        <i class="fas fa-trash"></i> Borrar
                                    </button>
                                </form>                          
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $cursos->links() }}
            </div>
        </div>
    @endif
        <button class="btn btn-primary position-absolute bottom-0 end-0 m-5">
            <a id="boton" class="text-white text-decoration-none" href="{{ url('curs/create') }}"><i class="fas fa-plus-circle"></i> Nuevo curso</a>
        </button>


        <!-- Modal para borrar -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Borrar curso</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cerrar</button>
                        <form id="formBorrar" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Borrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="/ABP_AndresToro/resources/js/modal.js"></script>

@endsection

<?php
?>
