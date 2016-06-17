@extends('layouts.master')

@section('contenido')		
		@if(sizeof($profesores) > 0)

		<form action="{{url('/profesores/cursos/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			{{method_field('PUT')}}

			<input type="hidden" name="curso_id" id="inputId" class="form-control" value="{{$curso->id}}">

			<legend>Editar un Curso</legend>

			<div class="form-group">
				<label for="">Título</label>
				<input type="text" name="titulo" id="inputTitulo" class="form-control" value="{{$curso->titulo}}" required="required" title="">
			</div>

			<div class="form-group">
				<label for="">Descripción</label>
				<input type="text" name="descripcion" id="inputTitulo" class="form-control" value="{{$curso->descripcion}}" required="required" title="">
			</div>

			<div class="form-group">
				<label for="">Valor</label>
				<input type="number" name="valor" id="inputTitulo" class="form-control" value="{{$curso->valor}}" required="required" title="">
			</div>
		
			<div class="form-group">
				<label for="">Profesor</label>
				<select name="profesor_id" id="inputProfesor_id" class="form-control" required="required">
					<option>Seleccione un profesor</option>
					@foreach($profesores as $profesor)
					<option value="{{$profesor->id}}" {{$profesor->id === $curso->profesor_id ? 'selected' : ''}}>{{$profesor->nombre}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Editar Curso</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay profesores en este momento para editar un curso
		</div>

		@endif
@endsection