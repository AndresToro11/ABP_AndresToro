@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        {{ Session::get("error") }}
    </div>
@endif

@if(Session::has('mensaje'))
    <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
        {{ Session::get("mensaje") }}
    </div>
@endif