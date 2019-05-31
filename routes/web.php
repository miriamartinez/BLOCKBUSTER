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

Route::group(["middleware"=>["auth"]],function () {

    Route::group(["middleware"=>["userverify"]],function ()
    {
        Route::resources([

            'sexos' => 'SexosController',
            'stands' => 'StandsController',
            'formatos' => 'FormatosController',
            'entradas' => 'EntradaController',
        ]);
    });


    Route::resources([

        'peliculas' => 'PeliculasController',
        'ventas' => 'VentasController',

    ]);
    Route::resource("generos","GenerosController")->except(["index"]);
});

Route::get("generos","GenerosController@index");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
