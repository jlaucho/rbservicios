<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameUsuario', 30);
            $table->string('apellidoUsuario', 30);
            $table->string('cedulaUsuario', 15);
            $table->string('direccionUsuario');
            $table->string('emailUsuario');
            $table->integer('id_Cliente')->unsigned();
            $table->foreign('id_Cliente')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::drop('usuarios_cliente');
    }
}
