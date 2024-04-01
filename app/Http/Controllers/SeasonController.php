<?php

namespace App\Http\Controllers;

use App\models\Season;
use App\Models\Plate;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    public function season($seasonName)
    {
        $season = Season::where('name', $seasonName)->firstOrFail();
        
        $eat = $this->recipesType(1, $season->name);
        $dinner = $this->recipesType(2, $season->name);
        $name = $season->name;
        $descriptions = $this->descriptionSeason($seasonName);

        return view('auth.seasons', compact('eat', 'dinner', 'name','descriptions'));

        // No funciona. revisar doc relaciones eloquent
        // $eat = $season
        //     ->plates()
        //     ->alimentation()
        //     ->where('type', 'Comer')
        //     ->get();

    }

   
    public function recipesType($AlimentID, $seasonName)
    { 
        return Plate::join('ingredient_plates', 'ingredient_plates.ingredient_id', '=', 'plates.id')
            ->join('alimentations', 'plates.type_aliment', '=', 'alimentations.id')
            ->join('seasons', 'plates.season_id', '=', 'seasons.id')
            ->select('plates.title_name', 'plates.id', 'plates.photo')
            ->distinct()
            ->where('seasons.name', '=', $seasonName)
            ->where('alimentations.id', '=', $AlimentID)
            ->get();
    }

    public function descriptionSeason($seasonName){
        return Season::select('seasons.description')->where('seasons.name','=',$seasonName)->first();
    }
}
