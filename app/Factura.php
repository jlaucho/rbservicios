<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table 	= 'facturas';
    protected $primaryKey='idFacturas';
    protected $fillable = [
    	'odc', 'numFactura', 'fechaFactura', 'codigo', 'descripcionFactura', 'precioUnidad', 'totalFact', 'totalUnidad', 'cantUnidad', 'IVA', 'pagada', 'correo_id', 'empresa_id'
    ];
    public function empresa()
    {
    	return $this->belongsTo('App\Cliente','cliente_id','idFacturas');
    }
    public function correo()
    {
    	return $this->belongsTo('App\Correo','correo_id','idCorreo');
    }
}
