<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasM extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'id_venta';
    protected $fillable = ['cantidad' , 'subtotal' , 'id_entrada' , 'id_ticket' ];

    function getTickets()
    {
        return $this->hasMany('App\Tickets','id_ticket','id_ticket');
    }
    function getEntradas()
    {
        return $this->hasMany('App\Entradas','id_entrada','id_entrada');
    }
}
