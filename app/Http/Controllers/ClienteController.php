<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

class ClienteController extends Controller
{
    /**
     * Métodos para Cursos
     */
    protected function obtenerTodosLosCursos()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/cursos');

    	$datos = json_decode($respuesta);

    	$cursos = $datos->data;

    	return $cursos;
    }
	
	protected function obtenerUnCurso($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/cursos/{$id}");

        $datos = json_decode($respuesta);

        $curso = $datos->data;

        return $curso;
    }

    /**
     * Métodos para Estudiantes
     */
    protected function obtenerTodosLosEstudiantes()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/estudiantes');

    	$datos = json_decode($respuesta);

    	$estudiantes = $datos->data;

    	return $estudiantes;
    }
	
	protected function obtenerUnEstudiante($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/estudiantes/{$id}");

        $datos = json_decode($respuesta);

        $estudiante = $datos->data;

        return $estudiante;
    }

    protected function almacenarEstudiante(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $respuesta = $this->realizarPeticion('POST', 'https://apilumen.juandmegon.com/estudiantes', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }

    protected function modificarEstudiante(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://apilumen.juandmegon.com/estudiantes/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }

    protected function removerEstudiante(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $id = $request->get('estudiante_id');

        $respuesta = $this->realizarPeticion('DELETE', "https://apilumen.juandmegon.com/estudiantes/{$id}", ['headers' => ['Authorization' => $accessToken]]);
    }

    /**
     * Métodos para Profesores
     */
    protected function obtenerTodosLosProfesores()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/profesores');

    	$datos = json_decode($respuesta);

    	$profesores = $datos->data;

    	return $profesores;
    }
	
	protected function obtenerUnProfesor($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/profesores/{$id}");

        $datos = json_decode($respuesta);

        $profesor = $datos->data;

        return $profesor;
    }

    protected function almacenarProfesor(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $respuesta = $this->realizarPeticion('POST', 'https://apilumen.juandmegon.com/profesores', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);
    }

    protected function modificarProfesor(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://apilumen.juandmegon.com/profesores/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);
    }

    protected function removerProfesor(Request $request)
    {
    	$accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $id = $request->get('profesor_id');

        $respuesta = $this->realizarPeticion('DELETE', "https://apilumen.juandmegon.com/profesores/{$id}", ['headers' => ['Authorization' => $accessToken]]);
    }


    /**
     * Métodos para CursosEstudiantes
     */
    protected function obtenerEstudiantesCurso($cursoId)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/cursos/{$cursoId}/estudiantes");

        $datos = json_decode($respuesta);

        $estudiantes = $datos->data;

        return $estudiantes;
    }


    /**
     * Métodos para CursosEstudiantes
     */
    protected function obtenerCursosProfesor($profesorId)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/profesores/{$profesorId}/cursos");

        $datos = json_decode($respuesta);

        $cursos = $datos->data;

        return $cursos;
    }
}
