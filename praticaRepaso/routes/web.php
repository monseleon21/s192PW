<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvertidorController;

//Route::get('/', function () {
 //   return view('inicio');
//});
Route::view('/','inicio')->name ('rutainicio');
Route::view('/repaso','repaso1')->name ('rutarepaso');
//Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');



Route::post('/convertir', [ConvertidorController::class, 'convert'])->name('convertir');
