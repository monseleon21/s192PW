<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function home (){
        return view('inicio');
    }

    public function formulario (){
    }

    public function consulta (){
        
    }

    public function procesarCliente (validadorClientes $peticionValidada){
   

        //redireccion
       $usuario= $peticionValidada->input('txtnombre');
       session()->flash('exito','Se guardó el usuario '.$usuario);
       return to_route('rutaform');
    }
    
}
