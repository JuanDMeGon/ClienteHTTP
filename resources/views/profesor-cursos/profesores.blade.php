@extends('layouts.master')

@section('contenido')		
		@if(sizeof($profesores) > 0)

		<form action="{{url('/profesores/cursos')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Seleccione un Profesor</legend>
		
			<div class="form-group">
				<label for="">Profesor</label>
				<select name="profesor_id" id="inputProfesor_id" class="form-control" required="required">
					<option>Seleccione un profesor</option>
					@foreach($profesores as $profesor)
					<option value="{{$profesor->id}}">{{$profesor->nombre}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Obtener Cursos</button>
		</form>

		@else

		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Ups</strong> No hay profesores en este momento
		</div>

		@endif
@endsection