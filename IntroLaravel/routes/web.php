<?php

use Illuminate\Support\Facades\Route;

//RUTA TIPO GET
/* Route::get('/', function () {
    return view('welcome');
}); */

// RUTA TIPO VIEW
Route::view('/','welcome');


//CREACION DE RURTA DE NUESTRO FORMULARIO DE VISTA 
//RUTA TIPO VIEW
Route::view('/form','formulario');


