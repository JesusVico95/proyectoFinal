<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FruitsandVegetablesController extends Controller
{
    public function takeStatus(){
        $aleatorioTemporada = DB::table('seasons')->pluck('id');
        $aleatorio = $aleatorioTemporada->random();
        
        $back = $this->goBack($aleatorio);
        return view('auth.fruitsvegetables',['back'=>$back]);
    }

    public function goBack($aleatorio)
    {
        return DB::table('seasons as s')
        ->select('s.name')
        ->where('s.id', '=', $aleatorio)->first();
    }
}
