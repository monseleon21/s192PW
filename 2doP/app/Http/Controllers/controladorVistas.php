<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function formUsuarios(){
        return view('formUsu');

    }

   public function procesarf (validadorform $peticionValidada){


    $validated= $peticion->validate([
       
    ]);
      $usuario= $peticionValidada->input('txtcorreo');
      session()->flash('exito','se guardó el correo'.$usuario);
      return to_route('formUsu');
    }
}

