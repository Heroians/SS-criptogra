<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ComponenteController;

Route::resource('curso', CursoController::class);
Route::resource('componente', ComponenteController::class);

Route::get('/', function () {
    
    return view('welcome');
});
