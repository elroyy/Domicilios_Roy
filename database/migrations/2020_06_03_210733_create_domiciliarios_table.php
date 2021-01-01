<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domiciliarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cc',10);
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('dir',50);
            $table->string('tel',10);
            $table->string('estado',10);
            $table->integer('id_vehiculo')->unsigned();
            $table->integer('id_sucursal')->unsigned();

            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
            $table->foreign('id_sucursal')->references('id')->on('sucursals');
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
        Schema::dropIfExists('domiciliarios');
    }
}
