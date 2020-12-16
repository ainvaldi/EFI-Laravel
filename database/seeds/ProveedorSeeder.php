<?php

use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([
            'tipo_persona' => 'Proveedor',
            'nombre' => 'Marcio Martinelli',
            'tipo_documento' => 'DNI',
            'num_documento' => 37694532,
            'direccion' => 'Estrada 543',
            'telefono' => 3584569043,
            'email' => 'marcio@gmail.com'
        ]);
        DB::table('persona')->insert([
            'tipo_persona' => 'Proveedor',
            'nombre' => 'Santiago Reale',
            'tipo_documento' => 'DNI',
            'num_documento' => 36789432,
            'direccion' => 'Velez Sarsfield 465',
            'telefono' => 3584432134,
            'email' => 'santiagoreale@gmail.com'
        ]);
    }
}
