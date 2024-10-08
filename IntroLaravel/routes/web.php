<?php

use Illuminate\Support\Facades\Route;

//RUTA TIPO GET
/* Route::get('/', function () {
    return view('welcome');
}); */

// RUTA TIPO VIEW
Route::view('/','inicio')->name ('rutainicio');


//CREACION DE RURTA DE NUESTRO FORMULARIO DE VISTA 
//RUTA TIPO VIEW
Route::view('/formu','formulario')->name ('rutaform');


// Ruta de clientes
Route::view('/cliente','clientes')->name('rutaclientes');



