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
<<<<<<< HEAD

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
=======
>>>>>>> 25694758c067ab0abc41ec5ccb6e458c6742b00b

Route::group(["middleware"=>["auth"]],function(){

    Route::group(["middleware"=>["userverify"]],function()
    {
        Route::resources([
            'sexos'=>'SexosController',
            'stands'=>'StandsController',
            'formatos'=>'FormatosController',
            'entradas'=>'EntradaController',
            'tickets'=>'TicketsController',
            'clientes' => 'ClientesController'
        ]);
    });
    Route::resources([
        'peliculas'=>'PeliculasController',
        'ventas'=>'VentasController',
    ]);
    Route::resource("generos","GenerosController")->except(["index"]);

});

Route::get("generos","GenerosController@index");


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
