<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
	protected $table 	= 'correosEnviados';
	protected $primaryKey= 'idCorreos';
    protected $fillable = [
    	'mensaje', 'fechaServicio', 'cantHoras', 'cantDesvInter', 'cantDesvExter', 'cantPernocta', 'totalMonto', 'bonoNocturno', 'bonoFinSemena', 'ODC', 'user_id'
    ];

    //SE ARMAN LA RELACIONES
    //de muchos a uno con la tabla Users

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function recorridos()
    {
        return $this->hasMany('App\Recorrido'); 
    }
}
