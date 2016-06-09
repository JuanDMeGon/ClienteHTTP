@extends('layouts.master')

@section('contenido')		
		<div class="list-group">
			<a href="{{url('/estudiantes')}}" class="list-group-item">Obtener Todos los Estudiantes</a>
			<a href="{{url('/profesores')}}" class="list-group-item">Obtener Todos los Profesores</a>
			<a href="{{url('/cursos')}}" class="list-group-item">Obtener Todos los Cursos</a>
		</div>

		<div class="list-group">
			<a href="#" class="list-group-item">Obtener Un Estudiante</a>
			<a href="#" class="list-group-item">Obtener Un Profesor</a>
			<a href="#" class="list-group-item">Obtener Un Curso</a>
		</div>
@endsection