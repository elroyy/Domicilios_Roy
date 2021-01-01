<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro__domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->time('hora');
            $table->date('fecha');
            $table->string('direccion',20);
            $table->integer('precio');
            $table->integer('id_domiciliario')->unsigned();
            $table->integer('id_cliente')->unsigned();


            $table->foreign('id_domiciliario')->references('id')->on('domiciliarios');
            $table->foreign('id_cliente')->references('id')->on('clientes');
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
        Schema::dropIfExists('registro__domicilios');
    }
}
