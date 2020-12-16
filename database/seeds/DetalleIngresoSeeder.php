<?php

use Illuminate\Database\Seeder;

class DetalleIngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalle_ingreso')->insert([
            'idingreso' => 1,
            'idarticulo' => 2,
            'cantidad' => 15,
            'precio_compra' => 20.00,
            'precio_venta' => 30.00,
        ]);
        DB::table('detalle_ingreso')->insert([
            'idingreso' => 2,
            'idarticulo' => 1,
            'cantidad' => 5,
            'precio_compra' => 30.00,
            'precio_venta' => 50.00,
        ]);
    }
}
