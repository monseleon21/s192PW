<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
   // return view('welcome');

//});

Route::view('/','principal')->name('rutaprincipal');
Route::view('/registro','registro')->name('rutaregistro');

