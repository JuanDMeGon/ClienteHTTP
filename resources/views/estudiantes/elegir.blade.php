@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/estudiantes/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
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
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection