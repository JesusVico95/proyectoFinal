<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class CalendarioController extends Controller
{
    // public function calendario($seasonName){ //($seasonName)
    //     $season = Season::where('name', $seasonName)->firstOrFail();
    //     return view('auth.calendario',compact('season'));
    // }

    public function calendario()
    {

        return view('auth.calendario');
    }

    public function getSeason(Request $request)
    {
        $season = new Season();
        $season->name = $request->name;

        return redirect()->route('season', ['seasonName' => $season->name]);
    }
}
