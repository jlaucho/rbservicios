<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabulador extends Model
{
    protected $table	='tabulador';
    protected $fillable	=[
    	'presKM','presHoras','presDesvInternos','presDesvExternos','presPernocta','porBonoNocturno','porBonoFinSemana','porFeriado','fechaInicio','fechaFin'
    ];
}
