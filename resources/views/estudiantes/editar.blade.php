@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/estudiantes/actualizar')}}" method="POST" role="form">
			{{csrf_field()}}
	
			{{method_field('PUT')}}

			<input type="hidden" name="id" id="inputId" class="form-control" value="{{$estudiante->id}}">

			<legend>Ingrese los Datos del Estudiante</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required value="{{$estudiante->nombre}}">
			</div>

			<div class="form-group">
				<label for="">Dirección</label>
				<input type="text" class="form-control" name="direccion" required value="{{$estudiante->direccion}}">
			</div>

			<div class="form-group">
				<label for="">Teléfono</label>
				<input type="text" class="form-control" name="telefono" required value="{{$estudiante->telefono}}">
			</div>

			<div class="form-group">
				<label for="">Carrera</label>
				<select name="carrera" id="inputCarrera" class="form-control" required="required">
					<option>Por favor seleccione una carrera</option>
					<option value="ingeniería" {{$estudiante->carrera == 'ingeniería'?'selected':''}}>Ingeniería</option>
					<option value="matemática" {{$estudiante->carrera == 'matemática'?'selected':''}}>Matemática</option>
					<option value="física" {{$estudiante->carrera == 'física'?'selected':''}}>Física</option>
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Actualizar Estudiante</button>
		</form>

@endsection