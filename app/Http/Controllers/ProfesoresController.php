<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

use ClienteHTTP\Http\Requests\UnicoRequest;

class ProfesoresController extends Controller
{
    public function mostrarProfesores()
    {
    	$profesores = $this->obtenerTodosLosProfesores();

    	return view('profesores.todos', ['profesores' => $profesores]);
    }

    protected function obtenerTodosLosProfesores()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/profesores');

    	$datos = json_decode($respuesta);

    	$profesores = $datos->data;

    	return $profesores;
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

    protected function obtenerUnProfesor($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/profesores/{$id}");

        $datos = json_decode($respuesta);

        $profesor = $datos->data;

        return $profesor;
    }

    public function agregarProfesor()
    {
        return view('profesores.agregar');
    }

    public function crearProfesor(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $respuesta = $this->realizarPeticion('POST', 'https://apilumen.juandmegon.com/profesores', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);

        return redirect('/profesores');
    }
}
