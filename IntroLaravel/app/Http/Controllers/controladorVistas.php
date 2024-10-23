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
   
        //validaciones del lado del controlador

        $validated= $peticion->validate([ 
            'txtnombre'=>'required|min:3|max:25',
            'txtapellido'=>'required|max:25',
            'txtcorreo'=>'required|email:rfc,dns',
            'txttelefono'=>'required|numeric',
           
        ]);


        //redireccion
       $usuario= $peticion->input('txtnombre');
       session()->flash('exito','Se guardó el usuario '.$usuario);
       return to_route('rutaform');
    }
    
}
