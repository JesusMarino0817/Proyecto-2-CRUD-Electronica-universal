<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['categoria' => 'Sonido']);
        DB::table('categorias')->insert(['categoria' => 'Accesorios para celular']);
        DB::table('categorias')->insert(['categoria' => 'Otros']);
        DB::table('categorias')->insert(['categoria' => 'Electrodomesticos']);
        DB::table('categorias')->insert(['categoria' => 'Herramientas']);
        DB::table('categorias')->insert(['categoria' => 'Equipo de computo']);
        DB::table('categorias')->insert(['categoria' => 'Refacciones']);
        DB::table('categorias')->insert(['categoria' => 'Mantenimiento']);
    }
}
