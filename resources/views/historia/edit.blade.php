@extends('layouts.app')

@section('content')
<div class="container text-light">
	<h1>Modificación</h1>
	<form method="POST" action="{{route('historias.update',['historia'=>$historia->id])}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form row mb-4">
			<label>Titulo</label>
			<input type="text" name="Titulo" class="form-control" value="{{$historia->Titulo}}" required>
			
		</div>
		<div class="form row mb-4">
			<label>Descripcion</label>
			<input type="text" name="Descripcion" class="form-control"value="{{$historia->Descripcion}}" required>
			
		</div>

		<div class="form row mb-4">
			<label>Texto</label>
			<textarea name="Texto" class="form-control" rows="4" required>{{$historia->Texto}}
			</textarea>
			
		</div>

		<div class="form row mb-4">
			<label>Imagen</label>
			<input type="file" name="imagen" class="form-control-file" value="{{$historia->imagen}}">
		</div>
			

		<div class="form row m-4">
			<label>Enlace_historia</label>
			<input type="text" name="Enlace_historia" class="form-control"value="{{$historia->Enlace_historia}}" required>
			
		</div>



		<div class="form row m-4">
			<label>Enlace_video</label>
			<input type="text" name="Enlace_video" class="form-control"value="{{$historia->Enlace_video}}" required>
			
		</div>


         </div>
         <div class="d-flex justify-content-around">
		<button type="submit" class="myButton mt-4 d-block text-center">Enviar</button>
		<a href="{{route(('historias.index'))}}" class="myButton mt-4 text-center btn btn-danger btn-lg text-light">
		<i>Volver</i></a>
        </div>

	</form>
</div>

@endsection