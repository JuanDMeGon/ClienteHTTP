@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/profesores/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$profesor->id}}">

			<legend>Ingrese los Datos del Profesor</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required value="{{$profesor->nombre}}">
			</div>

			<div class="form-group">
				<label for="">Dirección</label>
				<input type="text" class="form-control" name="direccion" required value="{{$profesor->direccion}}">
			</div>

			<div class="form-group">
				<label for="">Teléfono</label>
				<input type="text" class="form-control" name="telefono" required value="{{$profesor->telefono}}">
			</div>

			<div class="form-group">
				<label for="">Profesión</label>
				<select name="profesion" id="inputCarrera" class="form-control" required="required">
					<option>Por favor seleccione una profesion</option>
					<option value="ingeniería" {{$profesor->profesion == 'ingeniería'?'selected':''}}>Ingeniería</option>
					<option value="matemática" {{$profesor->profesion == 'matemática'?'selected':''}}>Matemática</option>
					<option value="física" {{$profesor->profesion == 'física'?'selected':''}}>Física</option>
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar Profesor</button>
		</form>

@endsection