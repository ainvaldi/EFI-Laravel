<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Agustin Invaldi',
            'email' => 'agustininvaldi99@gmail.com',
            'password' =>bcrypt('123456'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'tipo_usuario'=>'Admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Santiago Reale',
            'email' => 'santireale@gmail.com',
            'password' =>bcrypt('123456'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'tipo_usuario'=>'Empleado',
        ]);
    }
}
