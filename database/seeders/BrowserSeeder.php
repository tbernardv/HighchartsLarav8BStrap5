<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
# Importamos el modelo Browser
use App\Models\Browser;

class BrowserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        # En los tutoriales de code step by step hay otra forma similar ver ejemplo en repositorio

        $data = [
            array('nombre' => 'Chrome', 'porcentaje' => 61.4),
            array('nombre' => 'IE Explorer', 'porcentaje' => 11.8),
            array('nombre' => 'Firefox', 'porcentaje' => 10.9),
            array('nombre' => 'Microsoft Edge', 'porcentaje' => 4.7),
            array('nombre' => 'Safari', 'porcentaje' => 4.2),
            array('nombre' => 'Opera', 'porcentaje' => 1.6)
        ];

        Browser::insert($data);
    }
}
