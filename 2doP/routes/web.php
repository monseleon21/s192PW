<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('forUsu');
});  */

Route::view('/','formUsuarios')->name('formUsu');