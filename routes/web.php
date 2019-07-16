<?php

Route::get('/', function () {
    return view('evento');
});

Route::get('/busca', 'EventoController@dados');
Route::post('/registrar', 'EventoController@registrarEvento');
