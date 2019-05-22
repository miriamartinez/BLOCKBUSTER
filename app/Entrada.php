<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas';
    protected $primaryKey = 'id_entrada';
    protected $fillable = ['id_pelicula','id_formato','id_stand'];


    function getTipoPeliculas()
    {
        return $this->hasMany('App\Peliculas','id_pelicula','id_pelicula');
    }
    function getFormatos()
    {
        return $this->hasMany('App\Formatos','id_formato','id_formato');
    }

    function getStands()
    {
        return $this->hasMany('App\Stands','id_formato','id_formato');
    }

}
