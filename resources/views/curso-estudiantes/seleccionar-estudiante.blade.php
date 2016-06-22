@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/cursos/estudiantes/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			{{method_field('DELETE')}}

			<input type="hidden" name="curso_id" id="inputId" class="form-control" value="{{$cursoId}}">

			<legend>Elija un Estudiante</legend>
		
			<div class="form-group">
				<label for="">Estudiante</label>
				<select name="estudiante_id" id="inputEstudiante_id" class="form-control" required="required">
					<option>Por favor elija un estudiante</option>
					@foreach($estudiantes as $estudiante)
					<option value="{{$estudiante->id}}">{{$estudiante->nombre}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar Estudiante del Curso</button>
		</form>

@endsection