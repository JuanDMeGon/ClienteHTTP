@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/profesores/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Elija un Profesor</legend>
		
			<div class="form-group">
				<label for="">Profesor</label>
				<select name="profesor_id" id="inputProfesor_id" class="form-control" required="required">
					<option>Por favor elija un profesor</option>
					@foreach($profesores as $profesor)
					<option value="{{$profesor->id}}">{{$profesor->nombre}}</option>
					@endforeach
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>

@endsection