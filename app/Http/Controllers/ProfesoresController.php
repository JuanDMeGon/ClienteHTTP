<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

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
}
