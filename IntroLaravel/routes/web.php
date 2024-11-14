<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

// importar el controlador de cliente
use App\Http\Controllers\clienteController;


// Controlador vistas
Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');


Route::view('/component','componentes')->name('rutacomponentes');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');


// Controlador Cliente
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');

// ruta para mnandar el formulario al controlador
Route::post('/cliente',[clienteController::class,'store'])->name('enviaCliente');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');














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