@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/profesores/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Profesor</legend>
		
			<div class="form-group">
				<label for="">Nombre</label>
				<input type="text" class="form-control" name="nombre" required>
			</div>

			<div class="form-group">
				<label for="">Dirección</label>
				<input type="text" class="form-control" name="direccion" required>
			</div>

			<div class="form-group">
				<label for="">Teléfono</label>
				<input type="text" class="form-control" name="telefono" required>
			</div>

			<div class="form-group">
				<label for="">Profesión</label>
				<select name="profesion" id="inputCarrera" class="form-control" required="required">
					<option>Por favor selecciones una carrera</option>
					<option value="ingeniería">Ingeniería</option>
					<option value="matemática">Matemática</option>
					<option value="física">Física</option>
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Crear Profesor</button>
		</form>

@endsection