<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alimentation;
use App\Models\Ingredient;
use App\Models\IngredientPlate;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(SeasonSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(AlimentationSeeder::class);
        $this->call(PlateSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(Ingredient_PlateSeeder::class);
        $this->call(BuyListSeeder::class);
        
    }
}
