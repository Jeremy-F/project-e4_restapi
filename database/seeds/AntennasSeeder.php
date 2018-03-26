<?php

use Illuminate\Database\Seeder;

class AntennasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $antennas = [
            [
                "name" => "Discon",
                "place" => "ESIEE",
                "start" => "2018-01-01",
                "end" => "2018-01-10",
            ],
            [
                "name" => "Discon",
                "place" => "OMIC",
                "start" => "2018-01-15",
                "end" => "2018-01-20",
            ],
            [
                "name" => "Talves",
                "place" => "ESIEE",
                "start" => "2018-01-20",
                "end" => "2018-01-30",
            ],
            [
                "name" => "Rotative",
                "place" => "ESIEE",
                "start" => "2018-02-01",
                "end" => "2018-02-10",
            ]
        ];

        foreach($antennas as $antenna){
            App\Antenna::create($antenna);
        }
    }
}
