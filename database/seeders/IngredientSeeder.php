<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 3,
            'name' => 'Pollo'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 1,
            'name' => 'Pimiento rojo, verde y amarillo'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 1,
            'name' => 'Zanahoria'
        ]);


        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 1,
            'name' => 'Melocotón'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 2,
            'name' => 'Canonigos'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 8,
            'name' => 'Cous-Cous'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 2,
            'name' => 'Espárragos'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 4,
            'name' => 'Salmón'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 7,
            'name' => 'Pasta'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 4,
            'name' => 'Atún'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 1,
            'name' => 'Tomate'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 9,
            'name' => 'Huevo'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 2,
            'name' => 'Pimiento Verde y rojo'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 2,
            'name' => 'Pepino'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 2,
            'name' => 'Ajo'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 9,
            'name' => 'Agua'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 9,
            'name' => 'Vinagre'
        ]); //ingredient_id = 17.



        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 1,
            'name' => 'Sandia'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 8,
            'name' => 'Quinoa'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 8,
            'name' => 'Arroz'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 4,
            'name' => 'Dorada'
        ]); //id21
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 2,
            'name' => 'Cebolla'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 3,
            'category_id' => 6,
            'name' => 'Bola de Mozarella'
        ]); //id23

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 2,
            'name' => 'Boniato'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 2,
            'name' => 'Calabaza'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 2,
            'name' => 'Coliflor'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 7,
            'name' => 'Macarrones'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 6,
            'name' => 'Queso Rallado'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 2,
            'name' => 'Acelgas'
        ]); //id29

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 4,
            'name' => 'Bacalao'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 5,
            'name' => 'Garbanzos'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 4,
            'name' => 'Lubina'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 3,
            'name' => 'Ternera'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 2,
            'name' => 'Champiñones'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 4,
            'name' => 'Merluza'
        ]); //id35

        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 9,
            'name' => 'Membrillo'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 2,
            'name' => 'Aguacate'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 4,
            'category_id' => 6,
            'name' => 'Queso Feta'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 2,
            'name' => 'Patatas'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 2,
            'name' => 'Maíz'
        ]); //id40

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 3,
            'name' => 'Hamburguesa de carne'
        ]);
        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 2,
            'name' => 'Rúcula'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 3,
            'name' => 'Pechuga de Pavo'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 1,
            'name' => 'Berenjena'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 1,
            'name' => 'Calabacín'
        ]); //id45

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 2,
            'name' => 'Espinacas'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 2,
            'name' => 'Calabaza'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 2,
            'name' => 'Bolsa de ensalada'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 1,
            'category_id' => 6,
            'name' => 'Queso lonchas'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 5,
            'name' => 'Lentejas'
        ]); //id50

        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 2,
            'name' => 'Judías Verdes'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 5,
            'name' => 'Guisantes'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 1,
            'name' => 'Limón'
        ]);//id53

        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 1,
            'name' => 'Aceite'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 9,
            'name'=>'Orégano'
        ]);
        
        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 9,
            'name'=>'Aceitunas'
        ]);

        DB::table('ingredients')->insert([
            'season_id' => 2,
            'category_id' => 9,
            'name'=>'Salsa de soja'
        ]); //id57

        // DB::table('ingredients')->insert([
        //     'season_id' => ,
        //     'category_id' => ,
        //     'name'=>''
        // ]); 
    }
}
