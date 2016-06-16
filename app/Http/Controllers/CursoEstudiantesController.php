<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

class CursoEstudiantesController extends ClienteController
{
    public function mostrarCursos()
    {
    	$cursos = $this->obtenerTodosLosCursos();

    	return view('curso-estudiantes.cursos', ['cursos' => $cursos]);
    }

    public function mostrarEstudiantesCurso(Request $request)
    {
    	$cursoId = $request->get('curso_id');

    	$estudiantes = $this->obtenerEstudiantesCurso($cursoId);

    	return view('curso-estudiantes.estudiantes', ['estudiantes' => $estudiantes]);
    }
}
