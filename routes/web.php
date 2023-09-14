<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view("Home Page");
});

Route::get('productos/{nombre}', function () {
    return "Listado de todos los productos";
});

Route::get('productos/crerate', function () {
    return "Aqui va el fomrulario de la creacion de productos";
});

Route::get('productos/{id}', function ($id) {
    return "El nombre del producto es $id";
});

Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "Aqui va el fomrulario de la creacion de productos";
})
