@extends('layouts.master')

@section('contenido')		
		@if(sizeof($cursos) > 0)

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
				@foreach($cursos as $curso)
				<tr>
					<td>{{$curso->id}}</td>
					<td>{{$curso->titulo}}</td>
					<td>{{$curso->descripcion}}</td>
					<td>{{$curso->valor}}</td>
					<td>{{$curso->profesor_id}}</td>
					<td>{{$curso->created_at}}</td>
					<td>{{$curso->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay cursos en este momento para este profesor
		</div>

		@endif
@endsection