<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta', function (Blueprint $table) {
            $table->increments('idventa');
            $table->integer('idcliente')->unsigned();
            $table->string('tipo_comprobante');
            $table->string('serie_comprobante');
            $table->string('num_comprobante');
            $table->dateTime('fecha_hora', $precision = 0);
            $table->decimal('impuesto', $precision = 4, $scale = 2);
            $table->decimal('total_venta', $precision = 11, $scale = 2);
            $table->string('estado');

            $table->foreign('idcliente')->references('idpersona')->on('persona')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta');
    }
}
