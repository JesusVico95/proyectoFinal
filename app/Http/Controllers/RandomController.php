<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plate;
use App\Models\Season;
use Illuminate\Support\Facades\DB;

class RandomController extends Controller
{

    public function randomRecipe()
    {
        $numeroAleatorio = DB::table('plates')->pluck('id');
        $aleat = $numeroAleatorio->random();

        return redirect()->route('plate',['id' => $aleat]);
    }

    
}
 