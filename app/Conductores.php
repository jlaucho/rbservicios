<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
    protected $table	='conductores';
    protected $fillable	=[
    	'nameConductor', 'apellidoConductor', 'cedulaConductor','direccionConductor', 'emailConductor','id_ticket'
    ];

    public function tickect()
    {
    	
    }
}
public function vehiculos()
{
	return $this->hasMany('App\Vehiculo', 'id_conductor','id');
}
public function ticket()
{
	return $this->belogsTo('App\Ticket', 'id_ticket','id');
}