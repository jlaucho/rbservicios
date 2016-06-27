<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table 	= 'empresas';
    protected $primaryKey = 'idEmpresas';
    protected $fillable	=[
    	'name', 'RIF', 'direccion', 'descripcion', 'telefono'
    ];
    public function facturas()
    {
    	$this->hasMany('App\Factura');
    }
}
