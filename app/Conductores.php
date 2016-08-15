<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
    protected $table	='conductores';
    protected $fillable	=[
    	'nameConductor', 'apellidoConductor', 'cedulaConductor','direccionConductor', 'emailConductor'
    ];

    
    public function vehiculos()
    {
    	return $this->hasMany('App\Vehiculos', 'id_conductor','id');
    }
    public function ticket_conductores()
    {
    	return $this->hasMany('App\ticket_conduct', 'id_conductor','id');
    }
}