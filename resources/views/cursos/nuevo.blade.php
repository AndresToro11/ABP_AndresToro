@extends('layouts.plantilla')

@section('titulo', 'Nuevo curso')

@section('contenido')

    @include('partials.mensaje')
    
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">
                Curs
            </h5>

            <form action=" {{ action([App\Http\Controllers\CursosController::class, 'store']) }} " method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="siglas">Sigles</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" name="siglas" placeholder="Sigles" value="{{ old('siglas') }}" autofocus>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="nombre">Nom</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" name="nombre" placeholder="Nom" value="{{ old('nombre') }}">
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="cicle">Cicle</label>
                    </div>
                    <div class="col-10">
                        <select name="cicle" id="cicle" class="form-select" aria-label="Default select example">

                        <option disabled selected>  Ciclos  </option>
                            @foreach($cicles as $cicle)

                                <option value="{{ $cicle->id }}">  {{ $cicle->sigles }}  </option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-2">
                        <label class="form-label" for="activo">Actiu</label>
                    </div>
                        <div class="col-1">

                            @if(old('activo') == 'activo')
                                <input class="form-check-input" type="checkbox" name="activo" value="activo" checked>
                            @else
                                <input class="form-check-input" type="checkbox" name="activo" value="activo">
                            @endif
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