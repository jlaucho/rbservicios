<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table 	= 'clientes';
    protected $fillable	=[
    	'nameCli', 'RIF_CedulaCli', 'direccionCli', 'descripcionCli', 'telefonoCli'
    ];
    public function facturas()
    {
    	return $this->hasMany('App\Factura','cliente_id','id');
    }
    public function usuarios()
    {
    	return $this->hasMany('UsuarioCliente','cliente_id','id');
    }
}
