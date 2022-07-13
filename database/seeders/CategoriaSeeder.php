<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'nombre' => 'frutas y verduras',            
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'bebidas y jugos',            
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'aseo y mantencion',            
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'tecnologia',            
        ]);
    }
}
