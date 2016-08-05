<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table	='ticket_servicio';
    protected $fillable	=[
    	'numTicket','fechaServicio','idUser','id_usuario','id_correo','created_at'
    ];

    public function usuario()
    {
    	return $this->belongsTo('App\UsuarioCliente','id_usuario','id');
    }
    public function conductores()
    {
    	return $this->hasMany('App\Conductores','id_ticket','id');
    }
    public function correo()
    {
    	return $this->belongsTo('App\Correo','id_correo','id');
    }
}
