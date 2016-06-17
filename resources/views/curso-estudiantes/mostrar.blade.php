@extends('layouts.master')

@section('contenido')		
		@if(sizeof($cursos) > 0)
		@if(sizeof($estudiantes) > 0)

		<form action="{{url('/cursos/estudiantes/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un Curso y un Estudiante</legend>
		
			<div class="form-group">
				<label for="">Curso</label>
				<select name="curso_id" id="inputCurso_id" class="form-control" required="required">
					<option>Seleccione un curso</option>
					@foreach($cursos as $curso)
					<option value="{{$curso->id}}">{{$curso->titulo}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">Estudiante</label>
				<select name="estudiante_id" id="inputEstudiante_id" class="form-control" required="required">
					<option>Seleccione un estudiante</option>
					@foreach($estudiantes as $estudiante)
					<option value="{{$estudiante->id}}">{{$estudiante->nombre}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Agregar Estudiante al Curso</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay estudiantes en este momento
		</div>

		@endif

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay cursos en este momento
		</div>

		@endif
@endsection