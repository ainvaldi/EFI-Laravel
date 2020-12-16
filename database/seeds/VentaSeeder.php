<?php

use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
    */
    public function run()
    {
        DB::table('venta')->insert([
            'idcliente' => 1,
            'tipo_comprobante' => 'Factura',
            'serie_comprobante' => 001,
            'num_comprobante' => 001,
            'fecha_hora' => '2020-12-15 18:30:40',
            'impuesto' => 18,
            'total_venta' => 300.00,
            'estado' => 'A'
        ]);
        DB::table('venta')->insert([
            'idcliente' => 2,
            'tipo_comprobante' => 'Boleta',
            'serie_comprobante' => 002,
            'num_comprobante' => 002,
            'fecha_hora' => '2020-12-17 09:34:42',
            'impuesto' => 18,
            'total_venta' => 500.00,
            'estado' => 'A'
        ]);
    }
}
     