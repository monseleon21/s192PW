<?php

use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
}); */

Route::view('/vuelos','vista1')->name('ruta1');
Route::view('/hospedajes','vista2')->name('ruta2');
Route::view('/vuelos','vista1')->name('ruta1');
