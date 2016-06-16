@extends('layouts.master')

@section('contenido')		
		@if(sizeof($estudiantes) > 0)

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Teléfono</th>
					<th>Carrera</th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				@foreach($estudiantes as $estudiante)
				<tr>
					<td>{{$estudiante->id}}</td>
					<td>{{$estudiante->nombre}}</td>
					<td>{{$estudiante->direccion}}</td>
					<td>{{$estudiante->telefono}}</td>
					<td>{{$estudiante->carrera}}</td>
					<td>{{$estudiante->created_at}}</td>
					<td>{{$estudiante->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay estudiantes en el curso seleccionado
		</div>

		@endif
@endsection