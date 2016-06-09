@extends('layouts.master')

@section('contenido')

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
				<tr>
					<td>{{$estudiante->id}}</td>
					<td>{{$estudiante->nombre}}</td>
					<td>{{$estudiante->direccion}}</td>
					<td>{{$estudiante->telefono}}</td>
					<td>{{$estudiante->carrera}}</td>
					<td>{{$estudiante->created_at}}</td>
					<td>{{$estudiante->updated_at}}</td>
				</tr>
			</tbody>
		</table>
@endsection