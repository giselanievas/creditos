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
        Schema::create('linea_creditos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('TipoLinea_id'); // Relación con tipo de linea
            $table->string('descripcion');
            $table->integer('añoDesde');
            $table->integer('añoHasta');
            $table->unsignedInteger('Usuario_id'); // Relación con tipo de usuario
            $table->boolean('baja');
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
        Schema::dropIfExists('linea_creditos');
    }
}
