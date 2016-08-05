<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    protected $table	='vehiculos';
    protected $fillable	=[
    	'marca','modelo','placa','responsablilidadCivil','id_conductor'
    ];

    public function conductor()
    {
    	return $this->belongsTo('App\Conductores','id_conductor','id');
    }
}
