<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

use ClienteHTTP\Http\Requests\UnicoRequest;

class ProfesoresController extends ClienteController
{
    public function mostrarProfesores()
    {
    	$profesores = $this->obtenerTodosLosProfesores();

    	return view('profesores.todos', ['profesores' => $profesores]);
    }

    public function mostrarProfesor()
    {
        return view('profesores.unico');
    }

    public function obtenerProfesor(UnicoRequest $request)
    {
        $id = $request->get('id');

        $profesor = $this->obtenerUnProfesor($id);

        return view('profesores.mostrar', ['profesor' => $profesor]);
    }

    public function agregarProfesor()
    {
        return view('profesores.agregar');
    }

    public function crearProfesor(Request $request)
    {
        $this->almacenarProfesor($request);

        return redirect('/profesores');
    }

    public function elegirProfesor()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesores.elegir', ['profesores' => $profesores]);
    }

    public function editarProfesor(Request $request)
    {
        $id = $request->get('profesor_id');

        $profesor = $this->obtenerUnProfesor($id);

        return view('profesores.editar', ['profesor' => $profesor]);
    }

    public function actualizarProfesor(Request $request)
    {
        $this->modificarProfesor($request);

        return redirect('/profesores');
    }

    public function seleccionarProfesor()
    {
        $profesores = $this->obtenerTodosLosProfesores();

        return view('profesores.seleccionar', ['profesores' => $profesores]);
    }

    public function eliminarProfesor(Request $request)
    {
        $this->removerProfesor($request);

        return redirect('/profesores');
    }
}
