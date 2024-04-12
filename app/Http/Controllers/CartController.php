<?php

namespace App\Http\Controllers;


use App\Models\BuyList;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function getAllList(Request $request)
    {
        $user_id = $this->getCurrentUserId($request);
        $lista = $this->getFullBuyList($user_id);
        $user_name = $request->user()->name;
        $ingredient_type_colors = [
            'Carne' => 'danger',
            'Fruta' => 'success',
            'Verdura' => 'success',
            'Pescado' => 'info',
            'Legumbres' => 'secondary',
            'Lacteos' => 'primary',
            'Pastas' => 'warning',
            'Cereales' => 'warning',
            'Otros' => 'secondary',
        ];

        return view('auth.list', compact('lista', 'user_name', 'ingredient_type_colors'));
    }

    public function addIngredient(Request $request)
    {
        $user_id = $this->getCurrentUserId($request);
        $ingredient = $this->validateIngredient($request->ingredient_id);

        $this->addIngredientToBuyList($user_id, $ingredient->id);
        return redirect()->route('getAllList');
    }

    private function validateIngredient($ingredient_id)
    {
        $ingredient = Ingredient::findOrFail($ingredient_id);
        return $ingredient;
        // if(Ingredient::select('id')->where('id','=',$ingredient_id))

        // $ingredient = Ingredient::find($ingredient_id);
        // if ($ingredient){
        //     return $ingredient ;
        // }
        // return false; //Tambien podria ser null

    }

    private function getCurrentUserId(Request $request)
    {
        return $request->user()->id;
    }

    private function addIngredientToBuyList($user_id, $ingredient_id)
    {
        if ($this->isIngredientInBuyList($user_id, $ingredient_id)) {
            $this->incrementIngredientQuantity($user_id, $ingredient_id);
        } else {
            $this->createBuyListItem($user_id, $ingredient_id);
        }
    }

    private function isIngredientInBuyList($user_id, $ingredient_id)
    /*Esta función comprueba el usuario y el ingrediente de entre todas las filas de BuyList.*/
    {
        return BuyList::select('user_id', 'ingredient_id')
            ->where('user_id', '=', $user_id)
            ->where('ingredient_id', '=', $ingredient_id)
            ->exists();
    }

    private function incrementIngredientQuantity($user_id, $ingredient_id)
    { //Se pone el user_id para saber a que usuario se le incrementa.
        $buyList = BuyList::where('user_id', '=', $user_id)
            ->where('ingredient_id', '=', $ingredient_id)
            ->first();

        $buyList->quantity++;
        $buyList->save();
    }

    private function createBuyListItem($user_id, $ingredient_id)
    {
        $buyListItem = new BuyList();
        $buyListItem->user_id = $user_id;
        $buyListItem->ingredient_id = $ingredient_id;
        $buyListItem->quantity = 1;

        $buyListItem->save();
    }

    private function getFullBuyList($user_id)
    {
        return DB::table('categories')->select('categories.type_ingredient', 'ingredients.name', 'buy_lists.quantity')
            ->join('ingredients', 'categories.id', '=', 'ingredients.category_id')
            ->join('buy_lists', 'ingredients.id', '=', 'buy_lists.ingredient_id')
            ->where('buy_lists.user_id', '=', $user_id)
            ->orderBy('categories.type_ingredient', 'asc')
            ->orderBy('ingredients.name', 'asc')
            ->distinct()
            ->get();
    }

    private function removeFullBuyList($user_id)
    {
        return BuyList::select('quantity', 'ingredient_id')
            ->where('user_id', '=', $user_id)
            ->delete();
    }

    public function seeRemoveList(Request $request)
    {
        $user_id = $this->getCurrentUserId($request);
        $deleteList = $this->removeFullBuyList($user_id);

        return redirect()->route('getAllList', ['request' => $deleteList]);
    }
}
