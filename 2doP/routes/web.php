<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

/* Route::get('/', function () {
    return view('forUsu');
});  */

/* Route::view('/','formUsuarios')->name('formUsu');
 */
//ruta de controlador Vistas 
Route::get('/', [controladorVistas::class, 'formUsuarios'])->name('formUsu');

// envjuar info del boton
//Route::post('/enviarf', [controladorVistas::class, 'procesarf'])->name('rutaenviar');