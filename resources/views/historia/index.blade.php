@extends('layouts.app')

@section('content')

<div class="container">
	<h1 class="text-light">Lista de historias</h1>
	<a href="{{route('historias.create')}}" class="mb-3 float-right mr-3 "><button class="myButton"><i class="fas fa-user-edit icono"></i></button></a>
	<table>
		<div class="responsive">
			<table class="table">
				<thead class="thead-dark">
					<tr>

                <th class="d-md-table-cell text-light"> Imagen </th>
                <th class=" d-md-table-cell text-light"> Titulo </th>
				<th class="d-none d-md-table-cell text-light"> Descripcion </th>
				<th  class="d-none d-md-table-cell text-light"> Texto </th>
				<th  class="d-none d-md-table-cell text-light"> Enlace_historia </th>
				<th  class="d-none d-md-table-cell text-light"> Enlace_video </th>
				<th class="text-light"> Acciones </th>	
				</tr>
				</thead>
				<tbody>
					@foreach($historias as $historia)
					<tr>
					<td  class="d-md-table-cell text-light"><img src="{{asset($historia->imagen)}}"alt="imagen de {{$historia-> Titulo}}" class="imagenlista"></td>
                    <td  class="d-md-table-cell text-light">{{$historia->Titulo}}</td>
					<td  class="d-none d-md-table-cell text-light">{{$historia->Descripcion}}</td>
					<td  class="d-none d-md-table-cell text-light">{{$historia->Texto}}</td>
					<td  class="d-none d-md-table-cell text-light">
                     <a href="{{$historia->Enlace_historia}}" target="_blank">Historia</a>
				    </td>
					<td  class="d-none d-md-table-cell text-light"> 
						<a href="{{$historia->Enlace_video}}" target="_blank">Video</a> 
					</td>

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