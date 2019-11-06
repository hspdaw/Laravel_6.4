<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return "HOME";
});

//acceso estático
Route::get('/usuarios', function () {
    return "USUARIOS";
});
//acceso dinámico - Controlado con un condicional por regex 
Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando detalle del USUARIO: {$id}";
})->where('id','\d+');

//acceso estático a nuevo usuario
Route::get('/usuarios/nuevo', function () {
    return "Crear nuevo USUARIO";
});

//acceso dinámico con 2 vars y una no es obligatoria
Route::get('/saludo/{name}/{nick?}', function ($name, $nick = null) {
    if ($nick) {
        return "Bienvenido {$name}, tu nick es {$nick}";
    } else {
        return "Bienvenido {$name}, no tienes nick";
    }
    
});