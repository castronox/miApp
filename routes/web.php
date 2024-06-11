<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ventas', function () {
    return view ('ventas');
});

Route::get('/compras', function () {
    return view ('compras');
});


Route::get('/departamentos', function () {
    return view ('departamentos');
});


Route::get('/exportaciones', function () {
    return view ('exportaciones');
});


Route::get('/ventas', function () {
    return view ('ventas');
});


Route::get('/usuarios', function () {
    return view ('usuarios');
});

Route::get('/perfil', function () {
    return view ('perfil');
});


Route::get('/ventas', function () {
    return view ('ventas');
});


