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
