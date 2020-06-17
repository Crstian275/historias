@extends('layouts.app')
@section('content')
  <h1 class="text-light text-center text-md-left titulo">{{$historia->Titulo}}</h1>
 <div class="row border">
  	<div class="col-12 col-md-6">
  		<img src="{{ asset($historia->imagen)}}
  		"alt="imagen de (($historia->Titulo))"
  		class="img-fluid p-4">

  	</div>
  	  <div class=" text-light col-12 text-center col-md-6 text-md-left align-self-md-center">
  	   	 <h4>{{ $historia -> Titulo }}</h4>
  	   	 <p>{{ $historia->Texto}}</p>
         <a href="{{$historia -> Enlace_historia}}" class="d-block text-light" target="_blank">Enlace De La Historia</a>
         <a href="{{$historia -> Enlace_video}}" class="d-block text-light" target="_blank">Enlace Del Video</a>
         
  	   	 
  	   	

  	  </div>
  	
 </div>
 <a href="{{route(('main'))}}" class="myButton mt-4 text-center btn btn-outline-light btn-lg text-light">
        <i class="fas fs-arrow-left">Volver</i></a>
@endsection 