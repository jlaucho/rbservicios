<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table 	= 'clientes';
    protected $primaryKey = 'idCliente';
    protected $fillable	=[
    	'name', 'RIF_Cedula', 'direccion', 'descripcion', 'telefono'
    ];
    public function facturas()
    {
    	$this->hasMany('App\Factura');
    }
}
