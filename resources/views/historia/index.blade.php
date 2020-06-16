@extends('layouts.app')

@section('content')

<div class="container">
	<h1>Lista de historias</h1>
	<a href="{{route('historias.create')}}" class="mb-3"><i class="fas fa-user-edit icono"></i></a>
	<table>
		<div class="responsive">
			<table class="table-striped">
				<thead class="thead-light">
					<tr>

                <th class="d-md-table-cell"> Imagen </th>
                <th class=" d-md-table-cell"> Titulo </th>
				<th class="d-none d-md-table-cell"> Descripcion </th>
				<th  class="d-none d-md-table-cell"> Texto </th>
				<th  class="d-none d-md-table-cell"> Enlace_historia </th>
				<th  class="d-none d-md-table-cell"> Enlace_video </th>
				<th> Acciones </th>	
				</tr>
				</thead>
				<tbody>
					@foreach($historias as $historia)
					<tr>
					<td  class="d-md-table-cell"><img src="{{asset($historia->imagen)}}"alt="imagen de {{$historia-> Titulo}}" class="card-img-top rounded"></td>
                    <td  class="d-md-table-cell">{{$historia->Titulo}}</td>
					<td  class="d-none d-md-table-cell">{{$historia->Descripcion}}</td>
					<td  class="d-none d-md-table-cell">{{$historia->Texto}}</td>
					<td  class="d-none d-md-table-cell">{{$historia->Enlace_historia}}</td>
					<td  class="d-none d-md-table-cell">{{$historia->Enlace_video}}</td>

					<td>
						<a href="{{route('historias.edit',['historia'=>$historia->id])}}"class="myButton mb-3 d-block text-center"><i class="fas fa-edit icono"></i></a>
						<form method="POST" class="d-inline" action="{{route('historias.destroy',['historia'=>$historia->id])}}">
						   @csrf
						   @method('DELETE')
						   <button type="submit" class="myButton mb-3 d-block text-center" onclick="return confirm('¿Seguro que quieres eliminarlo?')"><i class="fas fa-trash-alt icono"></i></button>	
						</form>
						</td>   

					</tr>
					@endforeach

				</tbody>
			</table>
			
		</div>
	</table>
	
</div>

@endsection