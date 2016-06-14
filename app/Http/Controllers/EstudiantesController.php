<?php

namespace ClienteHTTP\Http\Controllers;

use Illuminate\Http\Request;

use ClienteHTTP\Http\Requests;

use ClienteHTTP\Http\Requests\UnicoRequest;

class EstudiantesController extends Controller
{
    public function mostrarEstudiantes()
    {
    	$estudiantes = $this->obtenerTodosLosEstudiantes();

    	return view('estudiantes.todos', ['estudiantes' => $estudiantes]);
    }

    protected function obtenerTodosLosEstudiantes()
    {
    	$respuesta = $this->realizarPeticion('GET', 'https://apilumen.juandmegon.com/estudiantes');

    	$datos = json_decode($respuesta);

    	$estudiantes = $datos->data;

    	return $estudiantes;
    }

    public function mostrarEstudiante()
    {
        return view('estudiantes.unico');
    }

    public function obtenerEstudiante(UnicoRequest $request)
    {
        $id = $request->get('id');

        $estudiante = $this->obtenerUnEstudiante($id);

        return view('estudiantes.mostrar', ['estudiante' => $estudiante]);
    }

    protected function obtenerUnEstudiante($id)
    {
        $respuesta = $this->realizarPeticion('GET', "https://apilumen.juandmegon.com/estudiantes/{$id}");

        $datos = json_decode($respuesta);

        $estudiante = $datos->data;

        return $estudiante;
    }

    public function agregarEstudiante()
    {
        return view('estudiantes.agregar');
    }

    public function crearEstudiante(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $respuesta = $this->realizarPeticion('POST', 'https://apilumen.juandmegon.com/estudiantes', ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->all()]);

        return redirect('/estudiantes');
    }

    public function elegirEstudiante()
    {
        $estudiantes = $this->obtenerTodosLosEstudiantes();

        return view('estudiantes.elegir', ['estudiantes' => $estudiantes]);
    }

    public function editarEstudiante(Request $request)
    {
        $id = $request->get('estudiante_id');

        $estudiante = $this->obtenerUnEstudiante($id);

        return view('estudiantes.editar', ['estudiante' => $estudiante]);
    }

    public function actualizarEstudiante(Request $request)
    {
        $accessToken = 'Bearer ' . $this->obtenerAccessToken();

        $id = $request->get('id');

        $respuesta = $this->realizarPeticion('PUT', "https://apilumen.juandmegon.com/estudiantes/{$id}", ['headers' => ['Authorization' => $accessToken], 'form_params' => $request->except('id')]);

        return redirect('/estudiantes');
    }
}
