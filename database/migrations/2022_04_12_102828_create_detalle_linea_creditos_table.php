<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleLineaCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_linea_creditos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('LineaCredito_ID'); // Relación con  linea de credito
            $table->double('coeficienteDesde',6,2);
            $table->double('coeficienteHasta',6,2);
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
        Schema::dropIfExists('detalle_linea_creditos');
    }
}
