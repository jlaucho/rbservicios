<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table	='ticket_servicio';
    protected $fillable	=[
    	'numTicket','fechaServicio','idUser','id_usuario','created_at'
    ];

    public function usuario()
    {
    	return $this->belongsTo('App\UsuarioCliente','id_usuario','id');
    }
    public function ticket_con()
    {
    	return $this->hasMany('App\ticket_conduct','id_ticket','id');
    }
    public function correo()
    {
    	return $this->hasOne('App\Correo','id_ticket','id');
    }
}
