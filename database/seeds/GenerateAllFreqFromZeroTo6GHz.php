<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenerateAllFreqFromZeroTo6GHz extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $haveToUp = [];
        for($i = 0; $i < 6*pow(10, 9); $i++){
            $haveToUp[] = ["value" => $i];
            if($i%20000 === 0){
                DB::table('freqs')->insert($haveToUp);
                $haveToUp = [];
            }
        }
    }
}
