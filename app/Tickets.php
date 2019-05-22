<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    //
    protected $table = 'tickets';
    protected $primaryKey='id_ticket';
    protected $fillable=['fecha','total','id_cliente'];

    function getClientes()
    {
        return $this->hasMany('App\Clientes','id_cliente','id_cliente');
    }
}
