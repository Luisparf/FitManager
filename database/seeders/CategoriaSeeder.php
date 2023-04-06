<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Categoria::create([
            'categoria' => 'Favoritos'
       ]);
       Categoria::create([
        'categoria' => 'Peito'
        ]);
        Categoria::create([
            'categoria' => 'Costas'
       ]);
       Categoria::create([
        'categoria' => 'Pernas'
        ]);
        Categoria::create([
            'categoria' => 'Ombros'
       ]);
       Categoria::create([
        'categoria' => 'Biceps'
        ]);
        Categoria::create([
            'categoria' => 'Triceps'
       ]);
   
    }
}
