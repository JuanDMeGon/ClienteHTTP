<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

use ClienteHTTP\Http\Requests\UnicoRequest;

class CursosController extends ClienteController
{
    public function mostrarCursos()
    {
    	$cursos = $this->obtenerTodosLosCursos();

    	return view('cursos.todos', ['cursos' => $cursos]);
    }

    public function mostrarCurso()
    {
        return view('cursos.unico');
    }

    public function obtenerCurso(UnicoRequest $request)
    {
        $id = $request->get('id');

        $curso = $this->obtenerUnCurso($id);

        return view('cursos.mostrar', ['curso' => $curso]);
    }
}
