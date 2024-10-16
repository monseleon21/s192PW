<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //   return view('inicio');
//});
Route::view('/','inicio')->name ('rutainicio');
Route::view('/repaso','repaso1')->name ('rutarepaso');
