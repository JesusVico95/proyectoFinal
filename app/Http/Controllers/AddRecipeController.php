<?php

namespace App\Http\Controllers;

use App\Models\Alimentation;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\IngredientPlate;
use Illuminate\Http\Request;
use App\Models\Plate;
use App\Models\Season;
use Illuminate\Support\Facades\DB;

class AddRecipeController extends Controller
{
    public function createRecipe()
    {
        $ingredients = $this->getAllIngredients();
        $categoryName = $this->getAllCategoriesName();
        $typeAliment = $this->getTypeAliment();
        

        return view('auth.addrecipe', compact('ingredients', 'categoryName', 'typeAliment'));
    }

    public function saveRecipe(Request $request)
    {
        $plates = $this->getListIngredients($request);
    
        return redirect()->route('plate', ['id' => $plates->id]);
    }


    public function getListIngredients(Request $request){
        $ingredientName = new Ingredient();
        $ingredientName->name = $request->name;
        $ingredientName->category_id = $request->category_id;

        $plates = new Plate();

        $plates->title_name = $request->title_name; 
        $plates->elaboration = $request->elaboration;
        $plates->time_elaboration = $request->time_elaboration;

        $aliment = new Alimentation();

        $aliment->type = $request->type_aliment;    
        $plates->type_aliment = $request->type_aliment;

        $ingredientName->save();
        $plates->save();

        $list = new IngredientPlate();

        $list->ingredient_id = $ingredientName->id; 
        $list->title_id = $plates->id; 
        $list->type_id = $request->type_aliment;
        
        $list->save();

        return $plates;
    }
    public function getAllIngredients()
    {
        return Ingredient::all();
    }

    public function getAllCategoriesName()
    {
        return Category::all();
    }

    public function getTypeAliment()
    {
        return Alimentation::all();
    }

}
