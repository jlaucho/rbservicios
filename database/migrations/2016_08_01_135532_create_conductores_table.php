<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameConductor', 30);
            $table->string('apellidoConductor', 30);
            $table->string('cedulaConductor', 15);
            $table->string('direccionConductor');
            $table->string('emailConductor');
            $table->integer('id_ticket')->unsigned();
            $table->foreign('id_ticket')->references('id')->on('ticket_servicio')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('conductores');
    }
}
