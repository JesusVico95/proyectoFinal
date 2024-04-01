<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AlimentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alimentations')->insert([
            'type'=>'Comer',
        ]);
        //Se puede cambiar por un foreach y el type dentro de un array.
        DB::table('alimentations')->insert([
            'type'=>'Cenar',
        ]);
    }
}
