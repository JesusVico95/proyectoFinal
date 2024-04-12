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
use Illuminate\Validation\Rules\Exists;

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


    public function getListIngredients(Request $request)
    {


        $plates = new Plate();

        $plates->title_name = $request->title_name;
        $plates->elaboration = $request->elaboration;
        $plates->time_elaboration = $request->time_elaboration;

        $aliment = new Alimentation();

        $aliment->type = $request->type_aliment;
        $plates->type_aliment = $request->type_aliment;

        $plates->save();


        $user_selected_ingredients = $request->ingredient_ids;//Es un array.
        foreach ($user_selected_ingredients as $input_ingredient_id) {
            if (empty($input_ingredient_id)) {
                continue;
            }

            $ingredient_plate = new IngredientPlate();
            $ingredient_plate->ingredient_id = $input_ingredient_id;
            $ingredient_plate->title_id = $plates->id;
            $ingredient_plate->save();
        }
        return $plates;
    }
    public function getAllIngredients()
    {
        return DB::table('ingredients')
            ->distinct()
            ->select('ingredients.name', 'ingredients.id')
            ->orderBy('ingredients.name', 'asc')
            ->get();
    }

    public function getAllCategoriesName()
    {
        return Category::all();
    }

    public function getTypeAliment()
    {
        return Alimentation::all();
    }
    private function getSeasons()
    {
        return Season::all();
    }

    public function createIngredient()
    {
        $season = $this->getSeasons();
        $categoryName = $this->getAllCategoriesName();

        return view('auth.createIngredient', compact('season', 'categoryName'));
    }
    public function createNewIngredient(Request $request)
    {

        $ingredientName = new Ingredient();

        $ingredientName->category_id = $request->category_id;
        $ingredientName->season_id = $request->season_id;

        $userSelectName = $request->name;
        $ingredientExists = false;

        $nameAllIngredientes  = DB::table('ingredients')
            ->select('ingredients.name')
            ->get();

        foreach ($nameAllIngredientes as $item) {
            if ($userSelectName == $item->name) {
                
                $ingredientExists = true;
                break;
            }
        }

        if (!$ingredientExists) {
            $ingredientName->name = $userSelectName;
            $ingredientName->save();
        }

        // $ingredientName->save();

        return $ingredientName;
    }

    public function saveIngredient(Request $request)
    {
        $ingredient = $this->createNewIngredient($request);
        $categoryName = $this->getAllCategoriesName();
        $season = $this->getSeasons();

        return view('auth.createIngredient', compact('ingredient', 'categoryName', 'season'));
    }

    public function successIngredient(Request $request){
        /*Pensar como poner de que si el ingrediente es nuevo que muestre ese view
        y en caso contrario que muestre el createIngred.*/

        $ingredient = $this->createNewIngredient($request);
        $categoryName = $this->getAllCategoriesName();
        $season = $this->getSeasons();

        return view('auth.ingredient', compact('ingredient', 'categoryName', 'season'));

    }
}
