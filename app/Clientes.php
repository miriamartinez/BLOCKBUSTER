<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $primaryKey='id_cliente';
    protected $fillable=['nom','ap','am','id_sexo'];

    function getSexo(){
        return $this->hasMany("App\Sexos",'id_sexo','id_sexo');
    }
}
