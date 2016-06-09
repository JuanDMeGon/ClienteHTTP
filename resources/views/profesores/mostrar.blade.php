@extends('layouts.master')

@section('contenido')

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
				<tr>
					<td>{{$profesor->id}}</td>
					<td>{{$profesor->nombre}}</td>
					<td>{{$profesor->direccion}}</td>
					<td>{{$profesor->telefono}}</td>
					<td>{{$profesor->profesion}}</td>
					<td>{{$profesor->created_at}}</td>
					<td>{{$profesor->updated_at}}</td>
				</tr>
			</tbody>
		</table>
@endsection