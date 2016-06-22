@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/profesores/cursos/eliminar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Curso</legend>
		
			<div class="form-group">
				<label for="">Curso</label>
				<select name="curso_id" id="inputCurso_id" class="form-control" required="required">
					<option>Por favor elija un curso</option>
					@foreach($cursos as $curso)
					<option value="{{$curso->id}}">{{$curso->titulo}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Eliminar</button>
		</form>

@endsection