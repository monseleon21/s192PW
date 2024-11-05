<?php

namespace App\Http\Requests\validadorform;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home (){
        return view('formUsuarios');

    }

   public function procesarForm(validadorform $peticionValidada){


    $validated= $peticion->validate([
       
    ]);
      $usuario= $peticionValidada->input('txtcorreo');
      session()->flash('exito','se guardó el correo'.$usuario);
      return to_route('formUsu');
    }
}

