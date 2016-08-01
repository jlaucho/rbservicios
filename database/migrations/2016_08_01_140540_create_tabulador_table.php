<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabuladorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabulador', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('presKM');
            $table->integer('presHoras');
            $table->integer('presDesvInternos');
            $table->integer('presDesvExternos');
            $table->integer('presPernocta');
            $table->integer('porBonoNocturno');
            $table->integer('porBonoFinSemena');
            $table->integer('porFeriado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tabulador');
    }
}
