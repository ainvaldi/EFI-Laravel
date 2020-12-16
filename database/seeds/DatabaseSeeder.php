<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriaSeeder::class);
        $this->call(ArticuloSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(VentaSeeder::class);
        $this->call(DetalleVentaSeeder::class);
        $this->call(IngresoSeeder::class);
        $this->call(DetalleIngresoSeeder::class);
        $this->call(UsuarioSeeder::class);
    }
}
