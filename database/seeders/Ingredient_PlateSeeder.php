<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Ingredient_PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $plates_data = [
        //     [
        //         'title' => 'Puré de calabaza',
        //         'cooking_time' => 15,
        //         'season' => 'verano',
        //         'ingredients' => [
        //             'calabaza',
        //             'cebolla',
        //         ],
        //     ],
        //     [
        //         'title' => 'Pollo asado',
        //         'cooking_time' => 120,
        //         'season' => 'primavera',
        //         'ingredients' => [
        //             'pollo',
        //             'cebolla',
        //         ],
        //     ],
        // ];

        // foreach($plates_data as $plate_data) {
        //     $plate = new Plate();
        //     $plate->title = $plate_data['title'];
        //     $plate->cooking_time = $plate_data['cooking_time'];

        //     $season = Season::where('name', $plate_data['season'])->first();
        //     if (empty($season)) {
        //         $season = new Season();
        //         $season->name = $plate_data['season'];
        //         $season->save();
        //     }
        //     $plate->season_id = $season->id;

        //     foreach ($plate_data['ingredients'] as $ingredient) {

        //     }
        // }


        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 1,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 1,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 34,
            'title_id' => 1,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 1,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 4,
            'title_id' => 2,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 5,
            'title_id' => 2,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 6,
            'title_id' => 3,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 7,
            'title_id' => 3,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 8,
            'title_id' => 4,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 4,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 4,
            'type_id' => 1
        ]);
        //

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 9,
            'title_id' => 5, //Pasta con atun y tomate y pimientos
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 5,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 10,
            'title_id' => 5,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 5,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 12,
            'title_id' => 5,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 6,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 13,
            'title_id' => 6,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 14,
            'title_id' => 6,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 15,
            'title_id' => 6,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 16,
            'title_id' => 6,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 17,
            'title_id' => 6,
            'type_id' => 2
        ]);
        //
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 18,
            'title_id' => 7,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 19,
            'title_id' => 7,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 14,
            'title_id' => 7,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 20,
            'title_id' => 8,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 8,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 7,
            'title_id' => 8,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 21,
            'title_id' => 9,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 9,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 9,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 10,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 23,
            'title_id' => 10,
            'type_id' => 2
        ]);
        //PLATOS OTOÑO
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 24,
            'title_id' => 11,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 11,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 25,
            'title_id' => 12,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 12,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 12,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 26,
            'title_id' => 13,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 27,
            'title_id' => 13,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 28,
            'title_id' => 13,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 29,
            'title_id' => 14,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 14,
            'type_id' => 2
        ]);


        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 30,
            'title_id' => 15,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 31,
            'title_id' => 15,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 15,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 15,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 15,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 32,
            'title_id' => 16,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 24,
            'title_id' => 16,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 33,
            'title_id' => 17,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 17,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 17,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 17,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 12,
            'title_id' => 18,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 34,
            'title_id' => 18,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 35,
            'title_id' => 19,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 20,
            'title_id' => 19,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 36,
            'title_id' => 20,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 37,
            'title_id' => 20,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 38,
            'title_id' => 20,
            'type_id' => 2
        ]);
        //Platos invierno

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 37,
            'title_id' => 21,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 38,
            'title_id' => 21,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 39,
            'title_id' => 21,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 40,
            'title_id' => 21,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 10,
            'title_id' => 21,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 21,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 41,
            'title_id' => 22,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 42,
            'title_id' => 22,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 22,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 22,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 12,
            'title_id' => 22,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 37,
            'title_id' => 22,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 43,
            'title_id' => 23,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 44,
            'title_id' => 23,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 45,
            'title_id' => 23,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 23,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 23,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 46,
            'title_id' => 24,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 24,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 24,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 24,
            'type_id' => 2
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 37,
            'title_id' => 24,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 47,
            'title_id' => 25,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 25,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 45,
            'title_id' => 25,
            'type_id' => 1
        ]);
        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 46,
            'title_id' => 25,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 26,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 26,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 26,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 34,
            'title_id' => 26,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 8,
            'title_id' => 27,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 20,
            'title_id' => 27,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 28,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 48,
            'title_id' => 28,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 49,
            'title_id' => 28,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 14,
            'title_id' => 28,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 13,
            'title_id' => 28,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 28,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 9,
            'title_id' => 29,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 29,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 29,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 10,
            'title_id' => 29,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 38,
            'title_id' => 29,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 12,
            'title_id' => 30,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 34,
            'title_id' => 30,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 50,
            'title_id' => 31,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 31,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 24,
            'title_id' => 31,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 31,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 39,
            'title_id' => 31,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 51,
            'title_id' => 32,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 12,
            'title_id' => 32,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 33,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 52,
            'title_id' => 33,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 7,
            'title_id' => 33,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 33,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 45,
            'title_id' => 34,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 39,
            'title_id' => 34,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 34,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 50,
            'title_id' => 35,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 14,
            'title_id' => 35,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 13,
            'title_id' => 35,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 35,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 35,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 35,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 1,
            'title_id' => 36,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 51,
            'title_id' => 36,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 3,
            'title_id' => 36,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 36,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 19,
            'title_id' => 37,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 21,
            'title_id' => 37,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 53,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 54,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 48,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 55,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 56,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 22,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 11,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 38,
            'title_id' => 38,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 57,
            'title_id' => 39,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 9,
            'title_id' => 39,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 43,
            'title_id' => 39,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 2,
            'title_id' => 39,
            'type_id' => 1
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 32,
            'title_id' => 40,
            'type_id' => 2
        ]);

        DB::table('ingredient_plates')->insert([
            'ingredient_id' => 34,
            'title_id' => 40,
            'type_id' => 2
        ]);
    }
}
