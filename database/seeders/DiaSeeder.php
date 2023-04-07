<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dia;

class DiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dia::create(['dia' => 'domingo']);
        Dia::create(['dia' => 'segunda-feira']);
        Dia::create(['dia' => 'terça-feira']);
        Dia::create(['dia' => 'quarta-feira']);
        Dia::create(['dia' => 'quinta-feira']);
        Dia::create(['dia' => 'sexta-feira']);
        Dia::create(['dia' => 'sábado']);
    }
}
