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
       // return('La información del cliente llego al controlador');

       //devuelve todo lo que contiene la peticion
       //return $peticion->all();

       // devuelve el nombre de la ruta desde donde se hizo la peticion
       //return $peticion->path();
       
       // devuelve la url completa de la peticion
       //return $peticion->url();

       // devuelve la la ip / host completa de la peticion
       return $peticion->ip();
    }
    
}
