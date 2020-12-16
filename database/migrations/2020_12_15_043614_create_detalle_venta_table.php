<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->increments('iddetalle_venta');
            $table->integer('idventa')->unsigned();
            $table->integer('idarticulo')->unsigned();
            $table->integer('cantidad');
            $table->decimal('precio_venta', $precision = 11, $scale = 2);
            $table->decimal('descuento', $precision = 11, $scale = 2);

            $table->foreign('idventa')->references('idventa')->on('venta')->onDelete('cascade');
            $table->foreign('idarticulo')->references('idarticulo')->on('articulo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
}
