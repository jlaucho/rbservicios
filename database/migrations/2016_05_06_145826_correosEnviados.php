<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorreosEnviados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correosEnviados', function (Blueprint $table) {
            $table->increments('idCorreos');
            $table->string('mensaje');
            $table->date('fechaServicio');
            $table->integer('cantHoras');
            $table->integer('cantDesvInter');
            $table->integer('cantDesvExter');
            $table->integer('cantPernocta');
            $table->float('totalMonto');
            $table->float('bonoNocturno');
            $table->float('bonoFinSemana');
            $table->enum('ODC',['si','no'])->default('no');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('correosEnviados');
    }
}
