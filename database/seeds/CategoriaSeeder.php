<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nombre' => 'Utiles escolares',
            'descripcion' => 'Todos los utiles escolares',
            'condicion' => 1,
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Remeras',
            'descripcion' => 'Todo tipo de remera y marca',
            'condicion' => 1,
        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Buzos',
            'descripcion' => 'Todo tipo de buzos',
            'condicion' => 1,
        ]);
    }
}
