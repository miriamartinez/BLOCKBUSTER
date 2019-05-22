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
    return view('Layauts.layaut');
});
Route::resources([
    'generos'=>'GenerosController',
    'sexos'=>'SexosController',
    'stands'=>'StandsController',
    'formatos'=>'FormatosController',
    'peliculas'=>'PeliculasController',
<<<<<<< HEAD
    'ventas'=>'VentasController'

=======
    'entradas'=>'EntradaController',
>>>>>>> 03c67a79b70077a7d9122f29f5347d70abb4b2d5
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
