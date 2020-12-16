<?php

use Illuminate\Database\Seeder;

class IngresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ingreso')->insert([
            'idproveedor' => 3,
            'tipo_comprobante' => 'Factura',
            'serie_comprobante' => 123,
            'num_comprobante' => 432,
            'fecha_hora' => '2020-12-18 11:23:14',
            'impuesto' => 18,
            'estado' => 'A'
        ]);
        DB::table('ingreso')->insert([
            'idproveedor' => 4,
            'tipo_comprobante' => 'Ticket',
            'serie_comprobante' => 4567,
            'num_comprobante' => 1234,
            'fecha_hora' => '2020-11-25 20:21:54',
            'impuesto' => 18,
            'estado' => 'A'
        ]);
    }
}
