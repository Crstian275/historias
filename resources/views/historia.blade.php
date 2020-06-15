@extends('layouts.app')
@section('content')
  <h1 class="text-center text-md-left titulo">{{$historia->Titulo}}</h1>
 <div class="row border">
  	<div class="col-12 col-md-6">
  		<img src="{{ asset($historia->imagen)}}
  		"alt="imagen de (($historia->Titulo))"
  		class="img-fluid p-4">

  	</div>
  	  <div class="col-12 text-center col-md-6 text-md-left align-self-md-center">
  	   	 <h4>{{ $historia -> Titulo }}</h4>
  	   	 <p>{{ $historia->Texto}}</p>
         <h5>{{$historia -> Enlace_historia}}</h5>
         <h6 >{{$historia -> Enlace_video}}</h6>
  	   	 
  	   	

  	  </div>
  	
 </div>
@endsection 