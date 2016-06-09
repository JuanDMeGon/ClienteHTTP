@extends('layouts.master')

@section('contenido')

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Titulo</th>
					<th>Descripción</th>
					<th>Valor</th>
					<th>Profesor</th>
					<th>Creación</th>
					<th>Actualización</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>{{$curso->id}}</td>
					<td>{{$curso->titulo}}</td>
					<td>{{$curso->descripcion}}</td>
					<td>{{$curso->valor}}</td>
					<td>{{$curso->profesor_id}}</td>
					<td>{{$curso->created_at}}</td>
					<td>{{$curso->updated_at}}</td>
				</tr>
			</tbody>
		</table>
@endsection