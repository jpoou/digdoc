<?php

namespace Database\Seeders;

use App\Models\Sign;
use Illuminate\Database\Seeder;

class SingSeeder extends Seeder
{
    public function run()
    {
        Sign::insert([
            'code' => 'FC',
            'name' => 'Frecuencia Cardiaca',
            'description' => 'Respiracion/min',
            'unit' => 'lpm'
        ]);

        Sign::insert([
            'code' => 'GS',
            'name' => 'Glucosa',
            'description' => 'Glucosa en la segare',
            'unit' => 'mg/dl'
        ]);

        Sign::insert([
            'code' => 'OS',
            'name' => 'Oxigenacion',
            'description' => 'Oxigenacion en la sagre',
            'unit' => '%'
        ]);

        Sign::insert([
            'code' => 'PA',
            'name' => 'Presion arterial',
            'description' => 'Sistolica',
            'unit' => 'mmHg'
        ]);

        Sign::insert([
            'code' => 'PA',
            'name' => 'Presion arterial',
            'description' => 'Distolica',
            'unit' => 'mmHg'
        ]);

        Sign::insert([
            'code' => 'TA',
            'name' => 'Temperatura',
            'description' => 'Temperatura en Celsius',
            'unit' => 'C'
        ]);

        Sign::insert([
            'code' => 'PL',
            'name' => 'Peso',
            'description' => 'Pesos en libras',
            'unit' => 'lb'
        ]);

        Sign::insert([
            'code' => 'MA',
            'name' => 'Altura',
            'description' => 'Metros de altura',
            'unit' => 'mts'
        ]);
    }
}
