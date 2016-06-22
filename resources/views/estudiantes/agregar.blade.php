@extends('layouts.master')

@section('contenido')		
		
		<form action="{{url('/estudiantes/agregar')}}" method="POST" role="form">
			{{csrf_field()}}
			<legend>Ingrese los Datos del Estudiante</legend>
		
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
				<label for="">Carrera</label>
				<select name="carrera" id="inputCarrera" class="form-control" required="required">
					<option>Por favor selecciones una carrera</option>
					<option value="ingeniería">Ingeniería</option>
					<option value="matemática">Matemática</option>
					<option value="física">Física</option>
				</select>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Crear Estudiante</button>
		</form>

@endsection