@extends('layouts.plantilla')

@section('titulo', 'Nuevo curso')

@section('contenido')

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">
                Curs
            </h5>

            <form action="" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="siglas">Sigles</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" name="siglas" id="siglas" value="{{ $cur->sigles }}">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="nombre">Nom</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $cur->nom }}">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="ciclo">Cicle</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" name="ciclo" id="ciclo" value="{{ $cur->cicle->sigles }}">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="activo">Actiu</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" name="activo" id="activo" value="{{ $cur->actiu }}">
                    </div>
                </div>

                <div class="row d-flex justify-content-end">
                    <div class="col-6 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Aceptar</button>

                        <button  type="button" class="btn btn-secondary ms-2">
                        <a id="boton" class="text-white text-decoration-none" href="{{ url('/curs') }}"><i class="fas fa-times"></i> Cancelar</a>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

<?php
 //{{ action([App\Http\Controllers\CursosController::class, 'update']) }}
 ?>
