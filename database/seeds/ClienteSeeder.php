<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([
            'tipo_persona' => 'Cliente',
            'nombre' => 'Agustin Invaldi',
            'tipo_documento' => 'DNI',
            'num_documento' => 41377575,
            'direccion' => 'Contitucion 346',
            'telefono' => 3463455764,
            'email' => 'agustininvaldi99@gmail.com'
        ]);
        DB::table('persona')->insert([
            'tipo_persona' => 'Cliente',
            'nombre' => 'Santiago Tortu',
            'tipo_documento' => 'DNI',
            'num_documento' => 42598434,
            'direccion' => 'Sobremonte 250',
            'telefono' => 3584569843,
            'email' => 's.tortu@gmail.com'
        ]);
    }
}
