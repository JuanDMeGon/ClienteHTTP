@extends('layouts.master')

@section('contenido')		
		<div class="list-group">
			<a href="{{url('/estudiantes')}}" class="list-group-item">Obtener Todos los Estudiantes</a>
			<a href="{{url('/profesores')}}" class="list-group-item">Obtener Todos los Profesores</a>
			<a href="{{url('/cursos')}}" class="list-group-item">Obtener Todos los Cursos</a>
		</div>

		<div class="list-group">
			<a href="{{url('/estudiantes/unico')}}" class="list-group-item">Obtener Un Estudiante</a>
			<a href="{{url('/profesores/unico')}}" class="list-group-item">Obtener Un Profesor</a>
			<a href="{{url('/cursos/unico')}}" class="list-group-item">Obtener Un Curso</a>
		</div>

		<div class="list-group">
			<a href="{{url('/estudiantes/agregar')}}" class="list-group-item">Agregar Un Estudiante</a>
			<a href="{{url('/profesores/agregar')}}" class="list-group-item">Agregar Un Profesor</a>

			<a href="{{url('/profesores/cursos/agregar')}}" class="list-group-item">Agregar un Curso</a>
		</div>

		<div class="list-group">
			<a href="{{url('/estudiantes/actualizar')}}" class="list-group-item">Actualizar Un Estudiante</a>
			<a href="{{url('/profesores/actualizar')}}" class="list-group-item">Actualizar Un Profesor</a>
			<a href="{{url('/profesores/cursos/actualizar')}}" class="list-group-item">Actualizar Un Curso</a>
		</div>

		<div class="list-group">
			<a href="{{url('/estudiantes/eliminar')}}" class="list-group-item">Eliminar Un Estudiante</a>

			<a href="{{url('/profesores/eliminar')}}" class="list-group-item">Eliminar Un Profesor</a>

			<a href="{{url('/profesores/cursos/eliminar')}}" class="list-group-item">Eliminar Un Curso</a>
		</div>

		<div class="list-group">
			<a href="{{url('/cursos/estudiantes')}}" class="list-group-item">Obtener los Estudiantes de Un Curso</a>

			<a href="{{url('/profesores/cursos')}}" class="list-group-item">Obtener los Cursos de Un Profesor</a>

			<a href="{{url('/cursos/estudiantes/agregar')}}" class="list-group-item">Agregar un Estudiante a Un Curso</a>

			<a href="{{url('/cursos/estudiantes/eliminar')}}" class="list-group-item">Eliminar un Estudiante de Un Curso</a>
		</div>
@endsection