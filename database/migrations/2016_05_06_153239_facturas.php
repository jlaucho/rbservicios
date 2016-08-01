<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('idFacturas');
            $table->string('odc',12);
            $table->string('numFactura', 5);
            $table->date('fechaFactura');
            $table->string('codigo', 6);
            $table->string('descripcionFactura');
            $table->float('precioUnidad');
            $table->float('totalFact');
            $table->float('totalUnidad');
            $table->integer('cantUnidad');
            $table->float('IVA');
            $table->enum('pagada',['SI', 'SI'])->default('SI');
            $table->integer('correo_id')->unsigned();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('correo_id')->references('idCorreos')->on('correosEnviados')->onDelete('cascade');
            $table->foreign('cliente_id')->references('idCliente')->on('clientes')->onDelete('cascade');
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
        Schema::drop('facturas');
    }
}
