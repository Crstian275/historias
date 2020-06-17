@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card fondoopaco text-light">
                <div class="card-header">Tablero</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ¡Estás conectado!
                </div>
            </div>
        </div>
    </div>
</div>

<a href="{{route(('main'))}}" class="myButton mt-4 text-center btn btn-outline-light btn-lg text-light">
        <i class="fas fs-arrow-left">Volver</i></a>
@endsection
