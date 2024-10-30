<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;

//Route::get('/', function () {
   // return view('welcome');

//});

/* Route::view('/','principal')->name('rutaprincipal');
Route::view('/registro','registro')->name('rutaregistro'); */

// rutar de principal
Route::get('/', [controladorVistas::class, 'home'])->name('rutaprincipal');

// ruta de registro de libros
Route::get('/reg', [controladorVistas::class, 'registro'])->name('rutaregistro');

Route::post('/enviarLibro',[controladorVistas::class, 'procesarlibro'])->name('rutaEnviar');

 /* Route::view('/', principal)->name('rutaprincipal');
 
 Route::view('/reg',registro)->name('rutaregistro'); */

