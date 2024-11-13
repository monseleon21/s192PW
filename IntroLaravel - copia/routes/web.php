<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;


Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');

Route::get('/formu', [controladorVistas::class, 'formulario'])->name('rutaform');

Route::get('/cliente', [controladorVistas::class, 'consulta'])->name('rutaclientes');

Route::view('/component','componentes')->name('rutacomponentes');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');







//RUTA TIPO GET
/* Route::get('/', function () {
    return view('welcome');
}); */

// RUTA TIPO VIEW
/*     Route::view('/','inicio')->name ('rutainicio');


    //CREACION DE RURTA DE NUESTRO FORMULARIO DE VISTA 
    //RUTA TIPO VIEW
    Route::view('/formu','formulario')->name ('rutaform');


    // Ruta de clientes
    Route::view('/cliente','clientes')->name('rutaclientes');

    // Ruta de componentes
     */