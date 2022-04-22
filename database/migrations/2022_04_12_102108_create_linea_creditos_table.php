<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_lineas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->boolean('baja');
            $table->timestamps();
        });


        Schema::create('linea_creditos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipoLinea_id'); // Relación con tipo de linea
          
            $table->string('descripcion');
            $table->integer('añoDesde');
            $table->integer('añoHasta');
            $table->unsignedInteger('Usuario_id'); // Relación con tipo de usuario
            $table->boolean('baja');
            $table->timestamps();
        });
        Schema::table('linea_creditos', function (Blueprint $table) {
             $table->foreign('tipoLinea_id')->references('id')->on('tipo_lineas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_creditos');
        Schema::dropIfExists('tipo_lineas');
    }
}
