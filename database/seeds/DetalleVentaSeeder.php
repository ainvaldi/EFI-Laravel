<?php

use Illuminate\Database\Seeder;

class DetalleVentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalle_venta')->insert([
            'idventa' => 1,
            'idarticulo' => 1,
            'cantidad' => 10,
            'precio_venta' => 30.00,
            'descuento' => 0.00,
        ]);
        DB::table('detalle_venta')->insert([
            'idventa' => 2,
            'idarticulo' => 3,
            'cantidad' => 5,
            'precio_venta' => 100.00,
            'descuento' => 0.00,
        ]);
    }
}
