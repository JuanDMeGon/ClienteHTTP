<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

use ClienteHTTP\Http\Requests\UnicoRequest;

class CursosController extends Controller
{
    public function mostrarCursos()
    {
    	$cursos = $this->obtenerTodosLosCursos();

    	return view('cursos.todos', ['cursos' => $cursos]);
    }

    protected function obtenerTodosLosCursos()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/cursos');

    	$datos = json_decode($respuesta);

    	$cursos = $datos->data;

    	return $cursos;
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

    protected function obtenerUnCurso($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/cursos/{$id}");

        $datos = json_decode($respuesta);

        $curso = $datos->data;

        return $curso;
    }
}
