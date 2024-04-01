<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seasons = [
            ['name' => 'Invierno', 'description' => 'Has escogido la temporada de invierno comprendida entre los meses de Diciembre-Marzo. Aquí tienes tu menú mensual, basado en productos frescos y de temporada.'],
            ['name' => 'Primavera', 'description' => 'Has escogido la primavera, comprendida entre los meses de Marzo-Junio, para muchos es la mejor estación del año ya que.Es por ello que, no podía faltar tú menú para esta estación.'],
            ['name' => 'Verano', 'description' => 'Verano, querido por muchos odiados por otros ... Nos encontramos en los meses de Junio-Septiembre Encontramos lo que es para muchos la mejor fruta de la temporada y aquí tienes un menú donde disfrutar de ensaladas frescas para combatir este calor.'],
            ['name' => 'Otoño', 'description' => 'El otoño está comprendido entre Septiembre y Diciembre, una de las estaciones del año que tiene zonas templadas Es una estación que contienen muchos cambios.Por tanto, nuestro menú no podía ser menos.']
        ];
        foreach ($seasons as $seasonName) {
            $season = new Season();

            $season->name = $seasonName['name'];
            $season->description = $seasonName['description'];
            $season->save();
        }
    }
}
