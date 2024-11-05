<?php

namespace App\Http\Controllers;


use App\Http\Requests\ValidadorClientes;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;


class controladorVistas extends Controller
{
    public function home() {
        return view('principal');
    }

    public function registro() {
        return view('registro');
    }

    // Aquí me quedo para continuar con redirecciones, es decir, alertas y que me manden mensajes con éxito
    public function enviarLibro(ValidadorClientes $peticionValidad) {
     // $validated= $peticionValidad->validate([]);

      $libro= $peticionValidad->input('txtTitulo');
      session()->flash('exito',$libro);
      return to_route('rutaregistro');

    }
}
