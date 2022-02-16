@extends('layouts.plantilla')

@section('titulo', 'Editar curso')

@section('contenido')
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">
                Curs
            </h5>

            <form action="{{ action([App\Http\Controllers\CursosController::class, 'update'], ['cur' => $cur->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="siglas">Sigles</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" name="sigles" id="sigles" value="{{ $cur->sigles }}">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="nom">Nom</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" name="nom" id="nom" value="{{ $cur->nom }}">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="cicle">Cicle</label>
                    </div>
                    <div class="col-10">
                        <select name="cicle" id="cicle" class="form-select" aria-label="Default select example">
                            @foreach($cicles as $cicle)

                                <option value="{{ $cicle->id }}" @if($cicle->id == $cur->cicles_id) selected  @endif >  {{ $cicle->sigles }}  </option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="activo">Actiu</label>
                    </div>
                    <div class="col-1">
                        <input class="form-check-input" type="checkbox" name="actiu" id="actiu" @if($cur->actiu == true) checked @endif>
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
 //@if($cicle->id == 1) selected @endif >{{ $cicle->sigles }}
 ?>
