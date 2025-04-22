<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Eixo;

class EixoSeeder extends Seeder
{
    public function run()
    {
        Eixo::create([
            'nome' => 'Ciências Exatas'
        ]);

        Eixo::create([
            'nome' => 'Ciências Humanas'
        ]);

        Eixo::create([
            'nome' => 'Tecnologia da Informação'
        ]);
    }
}
