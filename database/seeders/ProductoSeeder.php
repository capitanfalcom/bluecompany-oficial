<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'manzanas',
            'valor' => 1200,
            'fecha_expiracion' => now(),
            'id_categoria' => '2'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'naranjas',
            'valor' => 1500,
            'fecha_expiracion' => now(),
            'id_categoria' => '2'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'peras',
            'valor' => 3200,
            'fecha_expiracion' => now(),
            'id_categoria' => '2'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'confort',
            'valor' => 2000,
            'fecha_expiracion' => now(),
            'id_categoria' => '3'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'shampoo',
            'valor' => 1800,
            'fecha_expiracion' => now(),
            'id_categoria' => '3'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'jabon',
            'valor' => 980,
            'fecha_expiracion' => now(),
            'id_categoria' => '3'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'telefono nokia',
            'valor' => 56000,
            'fecha_expiracion' => now(),
            'id_categoria' => '4'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'televisor LG',
            'valor' => 120350,
            'fecha_expiracion' => now(),
            'id_categoria' => '4'
        ]);
    }
}
