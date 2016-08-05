<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioCliente extends Model
{
    protected $table	= 'usuarios_cliente';
    protected $fillable	= [
    	'nameUsuario', 'apellidoUsuario','cedulaUsuario','direccionUsuario','emailUsuario', 'id_Cliente'
    ];

    public function cliente()
    {
    	return $this->belongsTo('App\Cliente', 'id_Cliente','id');
    }
    public function tickets()
    {
    	return $this->hasMany('App\Ticket','id_usuario','id');
    }
}
