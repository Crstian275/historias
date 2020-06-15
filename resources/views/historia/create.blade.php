@extends('layouts.app')

@section('content')
<div class="container text-center">
	<h1>Historia Nueva</h1>
	<form method="POST" action="{{route('historias.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form row">
			<label>Título</label>
			<input type="text" name="Titulo" class="form-control"required>

		</div>

			<div class="form row">
			<label>Descripción De La Historia</label>
			<input type="text" name="Descripcion" class="form-control"required>
			
		</div>

		<div class="form row">
			<label>Texto De La Historia</label>
			<textarea name="Texto" class="form-control" rows="4" required></textarea>
			
		</div>

		<div class="form row">
			<label>Enlace_historia</label>
			<input type="text" name="Enlace_historia" class="form-control"required>
			
		</div>

		<div class="form row">
			<label>Enlace_video</label>
			<input type="text" name="Enlace_video" class="form-control"required>
			
		</div>


		<div class="form row">
			<label>Imagen</label>
			<input type="file" name="imagen" class="form-control-file">
			
		</div>
		<div class="text-center">
		<button type="submit" class="myButton mt-4 text-center">Enviar</button>
		<button type="Reset" class="myButton mt-4 d-block text-center">limpiar formulario</button>
		<a href="{{route(('historias.index'))}}" class="myButton mt-4 text-center btn btn-danger btn-lg text-light">
		<i class="fas fs-arrow-left">Volver</i></a>
</div>

	</form>
</div>

@endsection