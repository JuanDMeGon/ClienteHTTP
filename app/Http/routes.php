<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::delete('/cursos/estudiantes/eliminar', 'CursoEstudiantesController@eliminarEstudianteCurso');

Route::post('/cursos/estudiantes/eliminar', 'CursoEstudiantesController@seleccionarEstudianteCurso');

Route::get('/cursos/estudiantes/eliminar', 'CursoEstudiantesController@seleccionarCurso');

Route::post('/profesores/cursos/eliminar', 'ProfesorCursosController@eliminarCurso');

Route::get('/profesores/cursos/eliminar', 'ProfesorCursosController@seleccionarCurso');

Route::put('/profesores/cursos/actualizar', 'ProfesorCursosController@actualizarCurso');

Route::post('/profesores/cursos/actualizar', 'ProfesorCursosController@editarCurso');

Route::get('/profesores/cursos/actualizar', 'ProfesorCursosController@elegirCurso');

Route::post('/cursos/estudiantes/agregar', 'CursoEstudiantesController@agregarEstudianteCurso');

Route::get('/cursos/estudiantes/agregar', 'CursoEstudiantesController@mostrarEstudiantesCursos');

Route::post('/profesores/cursos/agregar', 'ProfesorCursosController@crearCurso');

Route::get('/profesores/cursos/agregar', 'ProfesorCursosController@agregarCurso');

Route::post('/profesores/cursos', 'ProfesorCursosController@mostrarCursosProfesor');

Route::get('/profesores/cursos', 'ProfesorCursosController@mostrarProfesores');

Route::post('/cursos/estudiantes', 'CursoEstudiantesController@mostrarEstudiantesCurso');

Route::get('/cursos/estudiantes', 'CursoEstudiantesController@mostrarCursos');

Route::post('/profesores/eliminar', 'ProfesoresController@eliminarProfesor');

Route::get('/profesores/eliminar', 'ProfesoresController@seleccionarProfesor');

Route::post('/estudiantes/eliminar', 'EstudiantesController@eliminarEstudiante');

Route::get('/estudiantes/eliminar', 'EstudiantesController@seleccionarEstudiante');

Route::put('/profesores/actualizar', 'ProfesoresController@actualizarProfesor');

Route::post('/profesores/actualizar', 'ProfesoresController@editarProfesor');

Route::get('/profesores/actualizar', 'ProfesoresController@elegirProfesor');

Route::put('/estudiantes/actualizar', 'EstudiantesController@actualizarEstudiante');

Route::post('/estudiantes/actualizar', 'EstudiantesController@editarEstudiante');

Route::get('/estudiantes/actualizar', 'EstudiantesController@elegirEstudiante');

Route::post('/profesores/agregar', 'ProfesoresController@crearProfesor');

Route::get('/profesores/agregar', 'ProfesoresController@agregarProfesor');

Route::post('/estudiantes/agregar', 'EstudiantesController@crearEstudiante');

Route::get('/estudiantes/agregar', 'EstudiantesController@agregarEstudiante');

Route::post('/cursos/unico', 'CursosController@obtenerCurso');

Route::get('/cursos/unico', 'CursosController@mostrarCurso');

Route::post('/profesores/unico', 'ProfesoresController@obtenerProfesor');

Route::get('/profesores/unico', 'ProfesoresController@mostrarProfesor');

Route::post('/estudiantes/unico', 'EstudiantesController@obtenerEstudiante');

Route::get('/estudiantes/unico', 'EstudiantesController@mostrarEstudiante');

Route::get('/profesores', 'ProfesoresController@mostrarProfesores');

Route::get('/cursos', 'CursosController@mostrarCursos');

Route::get('/estudiantes', 'EstudiantesController@mostrarEstudiantes');

Route::get('/', function () {
    return view('principal');
});
