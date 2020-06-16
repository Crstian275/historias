@extends('layouts.app')
@section('content')

<div class="row ">

     @foreach($historias as $historia)
     <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
       <div class="card my-3 p-2 shadow bg-transparent">
         <img src="{{asset($historia->imagen)}}"alt="imagen de {{$historia-> Titulo}}" class="card-img-top rounded">
           <div class="card-body">
           <h4 class="card-title text-light">{{$historia->Titulo}}</h4>
             <p class="card-text text-light">{{$historia->Descripcion}}</p>
          
          
       </div>

       <div class=" card-footer text-center">
            <a href="{{route('historia',['historia' => $historia->id]) }}" class="text-center">
              Historia Completa
              </a>
          </div>
   </div>
</div>

     @endforeach

 </div>

@endsection 