<?php

use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articulo')->insert([
            'idcategoria' => 1,
            'codigo' => 784,
            'nombre' => 'Impresora',
            'stock' => '10',
            'descripcion' => 'Impresora Epson Multifuncion',
            'imagen' => 'impresora.jpg',
            'estado' => 'Activo',
        ]);
        DB::table('articulo')->insert([
            'idcategoria' => 2,
            'codigo' => 123,
            'nombre' => 'Remera No End',
            'stock' => '10',
            'descripcion' => 'Remera No End al cuerpo ',
            'imagen' => 'remera.jpg',
            'estado' => 'Activo',
        ]);
        DB::table('articulo')->insert([
            'idcategoria' => 3,
            'codigo' => 342,
            'nombre' => 'Buzo Nike',
            'stock' => '10',
            'descripcion' => 'El buzo Nike Sportswear tiene un estilo casual ideal para disfrutar tus días con total comodidad.',
            'imagen' => 'buzo.jpg',
            'estado' => 'Activo',
        ]);
    }
}
