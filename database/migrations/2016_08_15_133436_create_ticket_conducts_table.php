<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketConductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_conducts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_conductor')->unsigned();
            $table->integer('id_ticket')->unsigned();
            $table->foreign('id_conductor')->references('id')->on('conductores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_ticket')->references('id')->on('ticket_servicio')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::drop('ticket_conducts');
    }
}
