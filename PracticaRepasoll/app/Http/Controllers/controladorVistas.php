<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class controladorVistas extends Controller
{
    
    public function home (){
        return view('principal');
    } 

    public function registro (){
        return view('registro');
    } 

    public function procesarlibro(Request $peticion){
        //return view('Se guardo el libro');
       return $peticion->all();
    }
}
