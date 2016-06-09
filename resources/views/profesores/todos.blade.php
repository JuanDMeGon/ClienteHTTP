@extends('layouts.master')

@section('contenido')		
		@if(sizeof($profesores) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Profesión</th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				@foreach($profesores as $profesor)
				<tr>
					<td>{{$profesor->id}}</td>
					<td>{{$profesor->nombre}}</td>
					<td>{{$profesor->direccion}}</td>
					<td>{{$profesor->telefono}}</td>
					<td>{{$profesor->profesion}}</td>
					<td>{{$profesor->created_at}}</td>
					<td>{{$profesor->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay estudiantes en este momento
		</div>

		@endif
@endsection