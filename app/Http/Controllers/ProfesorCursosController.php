<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

class ProfesorCursosController extends ClienteController
{
    public function mostrarProfesores()
    {
    	$profesores = $this->obtenerTodosLosProfesores();

    	return view('profesor-cursos.profesores', ['profesores' => $profesores]);
    }

    public function mostrarCursosProfesor(Request $request)
    {
    	$cursoId = $request->get('profesor_id');

    	$cursos = $this->obtenerCursosProfesor($cursoId);

    	return view('profesor-cursos.cursos', ['cursos' => $cursos]);
    }

    public function agregarCurso()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesor-cursos.agregar', ['profesores' => $profesores]);
    }

    public function crearCurso(Request $request)
    {
        $this->almacenarCurso($request);

        return redirect('/cursos');
    }

    public function elegirCurso()
    {
        $cursos = $this->obtenerTodosLosCursos();

        return view('profesor-cursos.todos', ['cursos' => $cursos]);
    }

    public function editarCurso(Request $request)
    {
        $idCurso = $request->get('curso_id');

        $curso = $this->obtenerUnCurso($idCurso);
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesor-cursos.editar', ['curso' => $curso, 'profesores' => $profesores]);
    }

    public function actualizarCurso(Request $request)
    {
        $this->modificarCurso($request);

        return redirect('/cursos');
    }

    public function seleccionarCurso()
    {
        $cursos = $this->obtenerTodosLosCursos();

        return view('profesor-cursos.seleccionar', ['cursos' => $cursos]);
    }

    public function eliminarCurso(Request $request)
    {
        $this->removerCurso($request);

        return redirect('/cursos');
    }
}
