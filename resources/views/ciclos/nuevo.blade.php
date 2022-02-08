@extends('layouts.plantilla')

@section('titulo', 'Ciclos')

@section('contenido')

    <div class="card mt-4">

        <div class="card-header">
            Ciclo
        </div>

        <div class="card-body">

            <form action="{{ action([App\Http\Controllers\CicloController::class, 'almacenar']) }}" method="POST">
                @csrf

                <div class="row mb-2">
                    <div class="col-2">
                        <label for="identificador" class="form-label">Identificador</label>
                    </div>
                    <div class="col-10">
                        <input type="number" name="identificador" id="identificador" class="form-control" maxlength="3" autofocus>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label for="siglas" class="form-label">Siglas</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="siglas" id="siglas" class="form-control">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label for="nombre" class="form-label">Nombre</label>
                    </div>
                    <div class="col-10">
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a class="btn btn-secondary m-1" href="{{ url('/ciclos') }}">Cancelar</a>
                    <button id="boton" class="btn btn-primary m-1" type="submit">Aceptar</button>
                </div>


            </form>

        </div>
    </div>

@endsection
