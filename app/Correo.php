<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
	protected $table 	= 'correosEnviados';
	protected $primaryKey= 'idCorreos';
    protected $fillable = [
    	'mensaje', 'cantHoras', 'cantDesvInter', 'cantDesvExter', 'cantPernocta', 'totalMonto', 'bonoFinSemena', 'user_id','pagadoConductor'
    ];

    //SE ARMAN LA RELACIONES
    //de muchos a uno con la tabla Users

    public function user()
    {
    	return $this->belongsTo('App\User','user_id','idCorreos');
    }
    public function recorridos()
    {
        return $this->hasMany('App\Recorrido','correo_id', 'idCorreos'); 
    }
    public function factura()
    {
        return $this->hasOne('App\Factura','correo_id','idCorreos');
    }
}
