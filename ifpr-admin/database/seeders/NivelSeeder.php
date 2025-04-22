<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nivel;

class NivelSeeder extends Seeder
{
    public function run()
    {
        Nivel::create([
            'nome' => 'Básico'
        ]);

        Nivel::create([
            'nome' => 'Intermediário'
        ]);

        Nivel::create([
            'nome' => 'Avançado'
        ]);
    }
}
