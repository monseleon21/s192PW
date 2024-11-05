<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;


Route::get('/', [controladorVistas::class, 'home'])->name('rutaprincipal');

Route::get('/reg', [controladorVistas::class, 'registro'])->name('rutaregistro');

Route::post('/enviarLibro',[controladorVistas::class, 'enviarLibro'])->name('rutaEnviar');

