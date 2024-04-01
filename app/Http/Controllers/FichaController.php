<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use App\Models\Plate;
use App\Models\BuyList;
use Illuminate\Support\Facades\DB;

class FichaController extends Controller
{
    public function datosFicha($id)
    {
        $ingredients = $this->ingredients($id);
        $title = $this->title($id);
        $plate = $this->elaborate($id);
        $photo = $this->takePhoto($id);

        return view('auth.ficha', compact('ingredients', 'plate', 'photo', 'title'));
    }

    public function ingredients($id)
    {
        return DB::table('ingredients AS i')
            ->select('plates.id as plate_id', 'i.id', 'i.name')
            ->join('ingredient_plates AS ing', 'i.id', '=', 'ing.ingredient_id')
            ->join('plates', 'ing.title_id', '=', 'plates.id')
            ->distinct()
            ->where('plates.id', '=', ($id))
            ->get();
    }

    public function title($id)
    {
        return Plate::select('id', 'title_name')->find($id);
    }

    public function elaborate($id)
    {
        return Plate::select('elaboration')->find($id);
    }

    public function takePhoto($id)
    {
        return Plate::select('photo')->find($id);
    }
}
