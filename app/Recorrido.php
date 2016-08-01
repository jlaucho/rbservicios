<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recorrido extends Model
{
    protected $table = 'recorridos';
    protected $primaryKey = 'idRecorridos';
    protected $fillable = [
    	'origen', 'destino', 'Km', 'totalRecorrido'
    ];

    public function correo()
    {
    	return $this->belongsTo('App\Correo');
    }
}
