<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function home (){
        return view('inicio');
    }

    public function formulario (){
        return view('formulario');
    }

    public function consulta (){
        return view('clientes');
    }

    public function procesarCliente (Request $peticion){
       // respuestas de redirección al origen, regresate por donde vienes 
       //return back();
      
       // respuestas de redirección pero mandar un valor 
       $usuario= $peticion->input('txtnombre');
       session()->flash('exito','Se guardó el usuario '.$usuario);
       return to_route('rutaform');
    }
    
}
