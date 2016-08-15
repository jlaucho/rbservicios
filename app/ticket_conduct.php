<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket_conduct extends Model
{
    protected $table = 'ticket_conducts';
    protected $fillable = [
    	'id_conductor','id_ticket', 'created_at'
    ];
    public function conductores()
    {
    	return $this->belongsTo('App\Conductores','id_conductor','id');
    }
    public function tickets()
    {
    	return $this->belongsTo('App\Ticket','id_ticket','id');
    }
}
