<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->increments('idarticulo');
            $table->integer('idcategoria')->unsigned();
            $table->string('codigo');
            $table->string('nombre');
            $table->integer('stock');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('estado');

            $table->foreign('idcategoria')->references('idcategoria')->on('categoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
}
