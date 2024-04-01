<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typesIngredients = ['Fruta','Verdura','Carne','Pescado','Legumbres',
        'Lacteos','Pastas','Cereales','Otros'];

        foreach($typesIngredients as $name){
            $type = new Category();

            $type -> type_ingredient = $name;

            $type->save();
        }
    }
}
